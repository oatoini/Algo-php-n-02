<?php

class VoitureElec extends Voiture {
    private int $_autonomie;

    public function __construct($_modele, $_marque, $_autonomie){

        parent::__construct($_modele, $_marque);
        $this->_autonomie = $_autonomie;
    }

    public function getAutonomie(){
        return $this->_autonomie;
    }
    public function setAutonomie($autonomie){
        $this->_autonomie=$autonomie;
        return $this;
    }

    public function getInfos(){
        return "<h3> - ".parent::__toString()." ".$this->_autonomie."<br>";
    }

}
?>