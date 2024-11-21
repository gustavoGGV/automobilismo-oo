<?php

require_once("IUsarCarro.php");
require_once("Carro.php");
require_once("Circuito.php");

class Formula extends Carro implements IUsarCarro {

    private int $ano;

    public function __toString() {

        return "Modelo: " . $this->modelo . "\nFabricante: " . $this->fabricante . "\nMotor: " . $this->motor. "\nNome da equipe: " . $this->equipe->getNome() . "\nPiloto: " . $this->equipe->getPiloto() . "\nAno: " . $this->ano . "\n\n";

    }

    public function ligarCarro() {

        return "\nSeu fórmula do ano " . $this->ano . " ligou seu motor " . $this->motor . "!\n";

    }

    public function pilotarCarro($circuitos, $opcao_circuito) {

        if($circuitos[$opcao_circuito]->getNomeComum()=="Interlagos") {

            return "\nSeu fórmula de ano " . $this->ano . " fez um tempo extremamente rápido!\n";

        } else if($circuitos[$opcao_circuito]->getNomeComum()=="Daytona") {

            return "\nSeu fórmula de ano " . $this->ano . " ferveu muito por conta do RPM alto por muito tempo, motor perdido. Mas nada que o dinheiro não resolva!\n";

        } else {

            return "\nSeu fórmula de ano " . $this->ano . " fez um tempo extremamente rápido, mas quase conheceu a morte inúmeras vezes!\n";

        }

    }

    /**
     * Get the value of ano
     */ 
    public function getAno()
    {
        return $this->ano;
    }

    /**
     * Set the value of ano
     *
     * @return  self
     */ 
    public function setAno($ano)
    {
        $this->ano = $ano;

        return $this;
    }
    
}
