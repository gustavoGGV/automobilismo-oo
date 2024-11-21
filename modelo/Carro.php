<?php

require_once("Equipe.php");

class Carro {

    protected string $modelo;
    protected string $fabricante;
    protected Equipe $equipe;
    protected string $motor;

    /**
     * Get the value of fabricante
     */ 
    public function getFabricante()
    {
        return $this->fabricante;
    }

    /**
     * Set the value of fabricante
     *
     * @return  self
     */ 
    public function setFabricante($fabricante)
    {
        $this->fabricante = $fabricante;

        return $this;
    }

    /**
     * Get the value of modelo
     */ 
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Set the value of modelo
     *
     * @return  self
     */ 
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;

        return $this;
    }

    /**
     * Get the value of motor
     */ 
    public function getMotor()
    {
        return $this->motor;
    }

    /**
     * Set the value of motor
     *
     * @return  self
     */ 
    public function setMotor($motor)
    {
        $this->motor = $motor;

        return $this;
    }

    /**
     * Get the value of equipe
     */ 
    public function getEquipe()
    {
        return $this->equipe;
    }

    /**
     * Set the value of equipe
     *
     * @return  self
     */ 
    public function setEquipe($equipe)
    {
        $this->equipe = $equipe;

        return $this;
    }

}
