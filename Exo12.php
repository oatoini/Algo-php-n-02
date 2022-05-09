<h2>Algorithmes PHP n°02</h2>
<h3>Exercice 12</h3>
<h4><p>La fonction var_dump($variable) permet d’afficher les informations d’une variable.</p>
<br>Soit le tableau suivant :<br>
<br>$tableauValeurs=array(true,"texte",10,25.369,array("valeur1","valeur2"));<br>
<br>A l’aide d’une boucle, afficher les informations des variables contenues dans le tableau.<br></h4>

 <?php
$tableauValeurs = [
                true, 
                "texte", 
                10, 
                25.369,
                ["valeur1", "valeur2"]
];

function afficherInfos(array $tableauValeurs){ //on passe en paramètre le tableau de valeurs
    $result="";        
        foreach($tableauValeurs as $value){
            $result .=var_dump($value);
        };
    return $result;
}
echo afficherInfos($tableauValeurs);

?>