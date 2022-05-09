<h2>Algorithmes PHP n°02</h2>
<h3>Exercice 11</h3>
<h4><p>Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une chaîne de caractère représentant une date.</p>
<br>Exemple :<br>
<br>formaterDateFr("2022-04-05");<br></h4>

 <?php
/*On veut envoyer une date de type string 2022-04-05 et afficher mardi 05 avril 2022.*/

$result = new DateTime();
$fmt = new IntlDateFormatter( "fr_FR" ,IntlDateFormatter::FULL, IntlDateFormatter::NONE,
'Europe/Paris',IntlDateFormatter::GREGORIAN  );

echo $fmt->format($result);

/*IntlDateFormatter est une classe concrète, qui active l'analyse et le formatage de dates, basé sur des chaînes modèles, ou des règles.
Elle analyse des chaînes PHP pour extraire des dates.
La constante IntlDateFormatter::FULL (int) traite un style complètement spécifié (Tuesday, April 12, 1952 AD or 3:30:42pm PST)*/

/*La fonction strtotime() essaye de lire une date au format anglais fournie par le paramètre time, et de la transformer en timestamp Unix 
(le nombre de secondes depuis le 1er Janvier 1970 à 00:00:00 UTC), relativement au timestamp baseTimestamp, ou à la date courante si ce dernier est omis.
    
explode — Scinde une chaîne de caractères en segments
explode() retourne un tableau de chaînes de caractères, chacune d'elle étant une sous-chaîne du paramètre string extraite en utilisant le séparateur separator.

    */

 ?>