<?php

//Essa classe não é funcional, serve no momento apenas para exemplo dos design patterns facade e singleton
    class EmpresaFacade {
		
	private static $instancia = null;

    public static function getInstancia() {
        if(is_null(self::$instance)) {
            self::$instance = new EmpresaFacade();
        }

        return self::$instance;
    }
	
	public function buscaCliente($cpf) {
        return new ClienteDao()->buscaPorCpf($cpf);
    }
    public function criaFatura($cliente, $valor) {
        $fatura = new Fatura($cliente, $valor);
        return $fatura;
    }

    public function geraCobranca(Fatura $fatura) {
        $cobranca = new Cobranca(new Boleto(), $fatura);
        $cobranca->emite();

        return $cobranca;
    }

    public function fazContato(Cliente $cliente, Cobranca $cobranca) {
        $contato = new ContatoCliente($cliente, $cobranca);
        $contato->dispara();

        return $contato;
    }
	}

?>