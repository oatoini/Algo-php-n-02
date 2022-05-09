<?php
class Voiture{                                                           
/*Groupement de valeurs et de fonctions. Il s'agit d'une définition qui contient le nom des propriétés et des méthodes */
    
    //On encapsule les données dans l'objet, on verrouille leurs accès car on en aura besoin que dans la classe.
    private string $_marque;       /*variables internes dans lesquelles on stocke des valeurs */
    private string $_modele;
    private int $_nbPortes;
    private int $_vitesseActuelle;
    private bool $_action;

    function __construct(string $marque, string $modele, int $nbPortes){    //Méthode servant à instancier un objet, c'est une methode magique
        $this->_marque= $marque; //Pour l'objet en cours -> la propriété marque prendra (=) la valeur $
        $this ->_modele=$modele;
        $this->_nbPortes=$nbPortes;
        $this ->_vitesseActuelle=0;
        $this ->_action=true;
    }

    public function getMarque(){    //Getter=accesseur permet d'accéder à la propriété
        return $this->_marque;      // trouves-moi, la valeur de la propriété de l'objet !
    }
    public function setMarque($marque){
        $this->_marque = $marque;               // modifie-moi la valeur de l'objet !
        return $this;                           // retournes-moi l'objet !
    }

    public function getModele(){
        return $this->_modele;
    }
    public function setModele($modele){
        $this->_modele = $modele;
        return $this;
    }

    public function getNbPortes(){
        return $this->_nbPortes;
    }
    public function setNbPortes($nbPortes){
        $this->_nbPortes = $nbPortes;
        return $this;
    }

    public function getVitesseActuelle(){      
        return "La vitesse actuelle du véhicule ".$this." est de ".$this->_vitesseActuelle." km/h.";
    }

    public function setVitesseActuelle($vitesse){
        $this->_vitesseActuelle = $vitesse;
        return $this;
    }

    public function getAction(){
        return $this->_action;
    }
    public function setAction($modele){
        $this->_action = $action;
        return $this;
    }

    public function demarrer(){
        $this->_action = true;
        return "Le véhicule ".$this." démarre";
    }
    
    public function stopper(){
        $this->_action = false;
        echo "Le vehicule ".$this." est stoppé.";
    }

    public function __toString(){
        return $this -> _marque." ".$this->_modele;
    }
    
    public function accelerer($vitesse){
                
        if($this->_action){
            $this->_vitesseActuelle += $vitesse;
            echo "Le véhicule ".$this." accélère de ".$vitesse."km/h";
        }else{
           echo "Le véhicule ".$this." veut accélerer de ".$vitesse."<br>Pour accélerer, il faut démarrer le véhicule ".$this." !";
        }
    }

    public function ralentir($vitesse){
        if($this->_action == true) {
            if($this->_vitesseActuelle>$vitesse){           
                $this->_vitesseActuelle -= $vitesse;
                echo"Le véhicule ".$this." ralentit de ".$vitesse."km/h";
            }else{
                echo"Le véhicule ".$this." veut ralentir de ".$vitesse."<br>Impossible !";
            }
        } else {
            echo "Le véhicule".$this." ne peut accélerer ou ralentir car il est à l'arrêt.";
        }
    }

    public function info(){
        $result = $this->_action == false ? 'démarré' : 'arrêté';
        return "------------------------------------<br> Nom et modèle du véhicule : ".$this."<br> Nombre de portes : ".$this->_nbPortes."<br> Le véhicule".$this.
        " est ".$result." <br> Sa vitesse actuelle est de : ".$this->_vitesseActuelle." km/h.";
    }

}

?>