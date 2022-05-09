<h2>Algorithmes PHP n°02</h2>

<h4><p>Créer une fonction personnalisée convertirMajRouge() permettant de transformer une chaîne de caractère passée en argument "MON TEXTE EN PARAMETRE" 
en majuscules et en rouge. Vous devrez appeler la fonction comme suit : convertirMajRouge($texte) ;</p></h4>

<?php

$texte = "mon texte en parametre";

function convertirMajRouge (string $texte) :string {
    $result="";
        $result= "<span style='font-weight:bold;color:#f00;'>".strtoupper ($texte)."</span>";
        $texte=$result;
    return $result;
};

echo convertirMajRouge($texte);
?>

