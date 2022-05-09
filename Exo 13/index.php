<?php


require 'Voiture.php';
/*require est identique à include mis à part le fait que lorsqu'une erreur survient, il produit également une erreur 
fatale de niveau E_COMPILE_ERROR. En d'autres termes, il stoppera le script alors que include n'émettra qu'une alerte 
de niveau E_WARNING, ce qui permet au script de continuer. */

$V1 = new Voiture ("Peugeot","407",5);  
$V2 = new Voiture ("Mercedes","CLS",5);  //instance de classe = objet

echo $V1->demarrer();
echo "<br>";

echo $V1-> accelerer(50);
echo "<br>";

echo $V1->getVitesseActuelle();
echo "<br>";

echo $V2->demarrer();
echo "<br>";

echo $V2->stopper();
echo "<br>";

echo $V2->ralentir(10);
echo "<br>";

echo $V2-> accelerer(20);
echo "<br>";

echo $V1->getVitesseActuelle();
echo "<br>";

echo $V2->getVitesseActuelle();
echo "<br>";

echo $V1->stopper();
echo "<br>";

echo $V1->info();
echo "<br>";

echo $V2->info();
echo "<br>";

?>