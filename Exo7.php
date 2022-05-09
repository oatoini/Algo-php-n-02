<h2>Algorithmes PHP n°02</h2>
<h3>Exercice 7</h3>
<h4><p>Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser dans le tableau associatif 
    si la case est cochée ou non.<br>
    <br>Exemple :<br>
    <br>genererCheckbox($elements);<br>
    //où $elements est un tableau associatif clé => valeur avec 3 entrées.<br>
    <br></h4>

<?php

$elements = ["choix1" => '',
        "choix2"=> '',
        "choix3"=> 'checked'
];

function genererCheckbox($elements){
    $result = '';
        foreach ($elements as $attribut => $check){
            $result .= "<input type='checkbox' $check id='$attribut' name='$attribut' value='$attribut'><label for='$attribut'>$attribut</label><br>";
        }
    return $result;
};

echo genererCheckbox($elements);
/*
 <input type="checkbox">
Les éléments <input> de type checkbox sont affichés sous la forme de boîtes à cocher qui sont cochées lorsqu'elles sont activées. 
Elles permettent de sélectionner une ou plusieurs valeurs dans un formulaire.
*/
?>