<?php

class Circuito {

    private string $nomeComum;
    private string $nome;
    private string $pais;
    private float $extensao;

    public function __construct($nomeComum, $nome, $pais, $extensao) {

        $this->nomeComum=$nomeComum;
        $this->nome=$nome;
        $this->pais=$pais;
        $this->extensao=$extensao;

    }

    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Get the value of pais
     */ 
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * Get the value of extensao
     */ 
    public function getExtensao()
    {
        return $this->extensao;
    }

    /**
     * Get the value of nomeComum
     */ 
    public function getNomeComum()
    {
        return $this->nomeComum;
    }
    
}
