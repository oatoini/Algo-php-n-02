<h2>Algorithmes PHP n°02</h2>
<h3>Exercice 9</h3>
<h4><p>Créer une fonction personnalisée permettant d’afficher des boutons radio avec un tableau de valeurs en paramètre 
    ("Monsieur","Madame","Mademoiselle").</p>
<br>Select a maintenance drone:<br></h4>

 <?php

$nomsRadio = ["Monsieur",
        "Madame",
        "Autre"
];

function afficherRadio($nomsRadio){
        foreach ($nomsRadio as $attribut){
            echo "<input type='radio' id='$attribut' name='$attribut' value='$attribut'><label for='$attribut'> $attribut</label><br>";
        }
};

afficherRadio($nomsRadio); 
/* 
<input type="radio">
Les éléments <input> dont l'attribut type ='' vaut radio sont généralement utilisés pour construire des groupes d'options parmi lesquelles 
on ne peut choisir qu'une valeur. Les « boutons radio » sont représentés par des cercles remplis lorsqu'ils sont sélectionnés.

*/
?>