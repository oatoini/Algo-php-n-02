<h2>Algorithmes PHP n°02</h2>
<h3>Exercice 6</h3>
<h4><p>Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau de valeurs.<br>

<br>Exemple :<br>
<br>$elements = array("Monsieur","Madame","Mademoiselle");<br>
<br>alimenterListeDeroulante($elements);<br></h4>


<?php

$elements = ["Monsieur",
            "Madame",
            "Mademoiselle"
];

function alimenterListerDeroulante (array $elements){

    $result = '<select name="elements">';

        foreach ($elements as $attribut){
            $result .= "<option value='$attribut'>$attribut</option>";
        }
    $result .= '</select>';
    return $result;
}

echo alimenterListerDeroulante($elements);

/*
L'élément HTML <select> représente un contrôle qui fournit une liste d'options parmi lesquelles l'utilisateur pourra choisir.

L'élément HTML <option>, utilisé dans un formulaire, permet de représenter un contrôle au sein d'un élément <select name="array $parametre">, 
<optgroup> ou <datalist>. Cet élément peut donc représenter des éléments d'un menu dans un document HTML.
*/
?>