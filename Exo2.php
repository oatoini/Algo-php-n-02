<h2>Algorithmes PHP n°02</h2>
<h3>Exercice 2</h3>
<h4><p>Soit le tableau suivant :<br>

<br>$capitales = array ("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome")<br>

<br> Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays s’affichera en majuscule et que le tableau 
est trié par ordre alphabétique du nom de pays) grâce à une fonction personnalisée. Vous devrez appeler la fonction comme suit : 
afficherTableHTML($capitales);</P><br></h4>

<?php
$capitales = [
    'France'=>'Paris',
    'Allemagne'=>'Berlin',
    'USA'=>'Washington',
    'Italie'=>'Rome'
];

function afficherTableHTML(array $capitales){
$result="";
$result.="<table border='1'>"; 
    $result.="<thead>";
        $result.="<tr>";
            $result.= "<th>Pays</th>";
            $result.= "<th>Capitales</th>";
        $result.="</tr>";
    $result.="</thead>";
    $result.="<tbody>";
            foreach ($capitales as $pays => $capitale){
                echo strtoupper($pays);
                $result.="<tr>";
                    $result.="<td>".$pays."</td>";
                    $result.="<td>".$capitale."</td>";
                $result.="</tr>";
            } 
    $result.="</tbody>";
$result.="</table>";
return $result;
}

ksort($capitales);
echo afficherTableHTML($capitales);

/*
<table> </table>  . C'est cette balise qui permet d'indiquer le début et la fin d'un tableau.
<tr> </tr>  : indique le début et la fin d'une ligne du tableau ;
<td> </td>  : indique le début et la fin du contenu d'une cellule.

La ligne d'en-tête se crée avec un <tr>  comme on l'a fait jusqu'ici, mais les cellules qu'elle 
contient sont, cette fois, encadrées par des balises <th>  et non pas <td>  !

<caption> se place tout au début du tableau, juste avant l'en-tête. C'est elle qui contient le titre du tableau

il existe des balises HTML qui permettent de définir les trois « zones » du tableau :

l'en-tête (en haut) : il se définit avec les balises <thead></thead>  ;

le corps (au centre) : il se définit avec les balises <tbody></tbody>  ;

le pied du tableau (en bas) : il se définit avec les balises <tfoot></tfoot>  .

On peut ajouter une bordure aux cellules du tableau avec <border>.

PAS OUBLIER LE .= QUI FAIT LA CONCATENATION d'une chaîne de caractères !!!!

*/

?>