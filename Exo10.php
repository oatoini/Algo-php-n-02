<h2>Algorithmes PHP n°02</h2>
<h3>Exercice 10</h3>
<h4><p>En utilisant l’ensemble des fonctions personnalisées crées précédemment, créer un formulaire complet qui contient les 
    informations suivantes : champs de texte avec nom, prénom, adresse e-mail, ville, sexe et une liste de choix parmi lesquels 
    on pourra sélectionner un intitulé de formation : « Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ».</p>
<br>Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement de validation (submit).<br></h4>

 <?php
/* 
On va avoir besoin d'une fonction afficherFormulaire () avec trois paramètres :
    - le champ de texte (nom, prénom, adresse email, ville)
    - liste déroulante (intitulé de formation)
    - et des boutons radio (sexe : masculin, féminin, autre)

On aura besoin d'une fonction pour chacun des trois paramètres :
    - afficherInputText()
    - afficherSelect()
    - afficherInputRadio()
*/

$inputText = ["Nom",                      //<input type='text'>
            "Prénom", 
            "Email", 
            "Ville"];

$select = ["Développeur Logiciel",       //<select name="array $parametre">
        "Designer web",
        "Intégrateur",
        "Chef de projet"
];

$inputRadio = ["Masculin" => "",          //<input type='radio'>
            "Feminin" => "",
            "autre" => "checked"
];


function afficherFormulaire($inputText, $select, $inputRadio){     //les trois paramètres qu'on aura besoin pour chacune des fonctions
        $result = "<form>";                                        // on ouvre la balise pour le formulaire
        $result .= afficherInputText($inputText);                  //la fonction qui permettra d'afficher le champ de texte du formulaire
        $result .= afficherInputRadio($inputRadio);                //la fonction qui permettra d'afficher les boutons radio pour le choix du sexe
        $result .= afficherSelect($select);                        //la fonction qui permettra d'afficher la liste déroulante
        $result .= "<button type='submit'>Envoyer</button>";       //la variable qui va mettre en place le bouton submit
        $result .= "</form>";                                      // fin de balise pour le formulaire
    return $result;
}

function afficherInputText($inputText){
    $champsTexte = "";
    foreach ($inputText as $value){                          //$nomdutableau tantque $variable qui contiendra tour à tour chaque valeur du tableau 
        $result2 = $value == 'Email' ? 'email' : 'texte';      //$result2 va reçevoir la valeur du tableau, contenant l'email.
        $champsTexte .= "<label for='".$value."'>".$value."</label><br>";    //<label> interface utilisateur avec contrôle étiqueté
        $champsTexte .= "<input name='".$value."' type='".$result2."' required><br>"; /*<input> contrôle interactif permettant la saisie des données 
        ici du texte type='text'. */
    }
    return $champsTexte;
}

function afficherSelect($select){
    $selection = "";
    $selection .= "<select>";
    foreach ($select as $value) {
        $selection .= "<option value='".$value."'>".$value."</option>";
    }
    $selection .= "<select>";
    return $selection;
}

function afficherInputRadio($inputRadio){
    $generer = "";
    foreach ($inputRadio as $key => $value) {
        $generer .= "<input type='radio' name='sexe' ".$value.">".$key."<br>";
    }
    return $generer;
}

echo afficherFormulaire($inputText, $select, $inputRadio);

?>