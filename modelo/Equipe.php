<?php

class Equipe {

    protected string $nome;
    protected string $piloto;

    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */ 
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of piloto
     */ 
    public function getPiloto()
    {
        return $this->piloto;
    }

    /**
     * Set the value of piloto
     *
     * @return  self
     */ 
    public function setPiloto($piloto)
    {
        $this->piloto = $piloto;

        return $this;
    }

}
