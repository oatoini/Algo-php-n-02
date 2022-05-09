<?php

class Voiture {
    private string $modele;
    private string $marque;

    public function __construct($_modele, $_marque){
        $this ->_modele = $_modele;
        $this ->_marque = $_marque;
    }

    public function __toString(){
        return " ".$this->_modele." ".$this->_marque." ";
    }

    public function getInfos(){
        echo "<h3> - ".$this."<br>";
    }

    public function getMarque(){
        return $this->_marque;
    }
    public function setMarque($marque){
        $this->_marque = $marque;
        return $this;
    }
    public function getModele(){
        return $this->_modele;
    }
    public function setModele($modele){
        $this->_modele= $modele ;
        return $this;
    }
}
?>