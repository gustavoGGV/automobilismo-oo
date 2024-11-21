<?php

require_once("IUsarCarro.php");
require_once("CarroCorrida.php");

class Nascar extends CarroCorrida {

    private string $setup;

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
