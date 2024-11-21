<?php

require_once("IUsarCarro.php");
require_once("CarroCorrida.php");

class Hypercar extends CarroCorrida {

    private string $bop;

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
