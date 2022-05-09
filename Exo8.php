<h2>Algorithmes PHP n°02</h2>
<h3>Exercice 8</h3>
<h4><p>Soit l’URL suivante : http://my.mobirise.com/data/userpic/764.jpg</p><br>
<p>Créer une fonction personnalisée permettant d’afficher l’image N fois à l’écran.</p><br>
<br>Exemple :<br>
<br>repeterImage($url,4);<br></h4>


<?php

$url = 'http://my.mobirise.com/data/userpic/764.jpg';

function repeterImage($url,$nb){
    $result = '';
        for ($i = 0; $i < $nb; ++$i) {
            $result .= "<img src = '$url' alt= 'url'> ";
        }
    return $result;
}

echo repeterImage($url, 4);

?>