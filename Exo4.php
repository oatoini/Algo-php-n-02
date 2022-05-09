<h2>Algorithmes PHP n°02</h2>
<h3>Exercice 4</h3>
<h4><p>A partir de l’exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra
le lien hypertexte de la page Wikipédia de la capitale (le lien hypertexte devra s’ouvrir dans un
nouvel onglet et le tableau sera trié par ordre alphabétique de la capitale).<br>

<br>On admet que l’URL de la page Wikipédia de la capitale adopte la forme :<br>
<br>https://fr.wikipedia.org/wiki/<br>
<br>Le tableau passé en argument sera le suivant :<br>
$capitales = array ("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome","Espagne"=>"Madrid");<br></h4>

<?php

$capitales = [
    'France'=>'Paris',
    'Allemagne'=>'Berlin',
    'USA'=>'Washington',
    'Italie'=>'Rome'
];

function afficherTableHTML($capitales){
    asort($capitales);
    /*trier selon les valeurs et ksort trier selon la clé */
$result="";
$result.="<table border='1'>"; 
    $result.="<thead>";
        $result.="<tr>";
            $result.= "<th>Pays</th>";
            $result.= "<th>Capitales</th>";
            $result.= "<th>Lien</th>";
        $result.="</tr>";
    $result.="</thead>";
    $result.="<tbody>";
            foreach ($capitales as $pays => $capitale){
                $result.="<tr>";
                    $result.="<td>".strtoupper($pays)."</td>";
                    $result.="<td>".$capitale."</td>";
                    $result .= "<td><a href='https://fr.wikipedia.org/wiki/$capitale' target='_blank'>Lien</a></td>";
                $result.="</tr>";
            } 
    $result.="</tbody>";
$result.="</table>";
return $result;
}
echo afficherTableHTML($capitales);

?>

