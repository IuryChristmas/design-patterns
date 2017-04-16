<?php

    class Banco {
    	private $nome;
    	private $telefone;
    	private $endereco;
    	private $email;
    	private $contas;

    	function __construct($nome, $telefone, $endereco, $email) {
    		$this->nome = $nome;
    		$this->telefone = $telefone;
    		$this->endereco = $endereco;
    		$this->email = $email;
    	}

    	public function addConta(Conta $novaConta) {
            $this->contas[] = $novaConta;
        }

        public function getContas() {
        	return $this->contas;
        }

    	public function getNome() {
    		return $this->nome;
    	}

    	public function getTelefone() {
    		return $this->telefone;
    	}

    	public function getEndereco() {
    		return $this->endereco;
    	}

    	public function getEmail() {
    		return $this->email;
    	}
    }