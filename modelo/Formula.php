<?php

require_once("IUsarCarro.php");
require_once("CarroCorrida.php");

class Formula extends CarroCorrida {

    private int $anoEpoca;

    /**
     * Get the value of anoEpoca
     */ 
    public function getAnoEpoca()
    {
        return $this->anoEpoca;
    }

    /**
     * Set the value of anoEpoca
     *
     * @return  self
     */ 
    public function setAnoEpoca($anoEpoca)
    {
        $this->anoEpoca = $anoEpoca;

        return $this;
    }
    
}
