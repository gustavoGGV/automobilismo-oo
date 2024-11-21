<?php

require_once("IUsarCarro.php");
require_once("Carro.php");

class CarroSeguranca extends Carro implements IUsarCarro {

    private string $categoria;

    public function __toString() {

        return "Modelo: " . $this->modelo . "\nFabricante: " . $this->fabricante . "\nMotor: " . $this->motor. "\nNome da equipe: " . $this->equipe->getNome() . "\nPiloto: " . $this->equipe->getPiloto() . "\nCategoria: " . $this->categoria . "\n\n";

    }

    public function ligarCarro() {

        return "\nO carro de segurança da categoria " . $this->categoria . " ligou, junto da sua sirene.\n";

    }

    public function pilotarCarro($circuitos, $opcao_circuito) {

        return "\nPilotando... circuito de " . $circuitos[$opcao_circuito]->getNomeComum() . " em segurança!\n";

    }

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
     * Get the value of categoria
     */ 
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Set the value of categoria
     *
     * @return  self
     */ 
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }

}
