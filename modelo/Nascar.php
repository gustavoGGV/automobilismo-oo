<?php

require_once("IUsarCarro.php");
require_once("Carro.php");

class Nascar extends Carro implements IUsarCarro {

    private string $setup;

    public function __toString() {

        return "Modelo: " . $this->modelo . "\nFabricante: " . $this->fabricante . "\nMotor: " . $this->motor. "\nNome da equipe: " . $this->equipe->getNome() . "\nPiloto: " . $this->equipe->getPiloto() . "\nSetup: " . $this->setup . "\n\n";

    }

    public function ligarCarro() {

        return "\nSeu Nascar de setup " . $this->setup . " ligou o " . $this->motor . "! USA! USA! USA!\n";

    }

    public function pilotarCarro($circuitos, $opcao_circuito) {

        if($this->setup=="Oval") {

            if($circuitos[$opcao_circuito]->getNomeComum()=="Interlagos") {

                return "\nSeu Nascar de setup " . $this->setup . " fez um tempo extremamente lento, já que ele não é acostumado a virar para a direita!\n";
    
            } else if($circuitos[$opcao_circuito]->getNomeComum()=="Daytona") {
    
                return "\nSeu Nascar de setup " . $this->setup . " teve uma velocidade média altíssima!\n\n";
    
            } else {
    
                return "\nSeu Nascar de setup " . $this->setup . " fez um tempo extremamente lento, já que ele não é acostumado a virar para a direita!\n";
    
            }

        } else {

            if($circuitos[$opcao_circuito]->getNomeComum()=="Interlagos") {

                return "\nSeu Nascar de setup " . $this->setup . " fez um tempo decente!\n";
    
            } else if($circuitos[$opcao_circuito]->getNomeComum()=="Daytona") {
    
                return "\nSeu Nascar de setup " . $this->setup . " teve uma velocidade média muito baixa!\n";
    
            } else {
    
                return "\nSeu Nascar de setup " . $this->setup . " fez um tempo extremamente decente!\n";
    
            }

        }

    }

    /**
     * Get the value of setup
     */ 
    public function getSetup()
    {
        return $this->setup;
    }

    /**
     * Set the value of setup
     *
     * @return  self
     */ 
    public function setSetup($setup)
    {
        $this->setup = $setup;

        return $this;
    }

}
