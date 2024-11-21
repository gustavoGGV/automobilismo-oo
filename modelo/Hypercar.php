<?php

require_once("IUsarCarro.php");
require_once("Carro.php");

class Hypercar extends Carro implements IUsarCarro {

    private string $bop;

    public function __toString() {

        return "Modelo: " . $this->modelo . "\nFabricante: " . $this->fabricante . "\nMotor: " . $this->motor. "\nNome da equipe: " . $this->equipe->getNome() . "\nPiloto: " . $this->equipe->getPiloto() . "\nBoP: " . $this->bop . "\n\n";

    }

    public function ligarCarro() {

        return "\nSeu Hypercar de BoP " . $this->bop . " ligou! Você aguenta pilotar por 24 horas?\n";

    }

    public function pilotarCarro($circuitos, $opcao_circuito) {

        if($this->bop=="Ruim") {

            if($circuitos[$opcao_circuito]->getNomeComum()=="Interlagos") {

                return "\nSeu Hypercar de BoP " . $this->bop . " fez um tempo bem medíocre para os seus padrões!\n";
    
            } else if($circuitos[$opcao_circuito]->getNomeComum()=="Daytona") {
    
                return "\nQue combinação é essa, cara?\n";
    
            } else {
    
                return "\nSeu Hypercar de BoP " . $this->bop . " fez um tempo medíocre para seus padrões, mas viva LeMans!\n";
    
            }

        } else {

            if($circuitos[$opcao_circuito]->getNomeComum()=="Interlagos") {

                return "\nSeu Hypercar de BoP " . $this->bop . " fez um tempo excelente para os seus padrões!\n";
    
            } else if($circuitos[$opcao_circuito]->getNomeComum()=="Daytona") {
    
                return "\nQue combinação é essa, cara?\n";
    
            } else {
    
                return "\nSeu Hypercar de BoP " . $this->bop . " fez um tempo extremamente excelente para os seus padrões, viva LeMans!\n";
    
            }

        }

    }

    /**
     * Get the value of bop
     */ 
    public function getBop()
    {
        return $this->bop;
    }

    /**
     * Set the value of bop
     *
     * @return  self
     */ 
    public function setBop($bop)
    {
        $this->bop = $bop;

        return $this;
    }

}
