<h2>Algorithmes PHP n°02</h2>
<h3>Exercice 5</h3>
<h4><p>Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en précisant le nom des champs associés.<br>

<br>Exemple :<br>
<br>$nomsInput = array("Nom","Prénom","Ville");<br>
<br>afficherInput($nomsInput);<br></h4>


<?php
$nomsInput = ["Nom", "Prénom", "Ville"];

function afficherInput($nomsInput){
    $result = "";
    $result .= "<form>";
    
        foreach ($nomsInput as $element) {
            $result .= "<label for='".$element."'>".$element."</label><br>";
            $result .= "<input type='text' name='".$element."' required><br>";
        }
    $result.= "</form>";
    return $result;
}

echo afficherInput($nomsInput);


/*L'élément HTML <form> représente un formulaire, c'est-à-dire une section d'un document qui contient des contrôles interactifs 
permettant à un utilisateur de fournir des informations
    
L'élément HTML <label> représente une légende pour un objet d'une interface utilisateur. Il peut être associé à un contrôle 
en utilisant l'attribut for='' ou en plaçant l'élément du contrôle à l'intérieur de l'élément <label>. Un tel contrôle est appelé 
contrôle étiqueté par l'élément <label>. 

L'élément HTML <input> est utilisé pour créer un contrôle interactif dans un formulaire web qui permet à l'utilisateur de 
saisir des données. Les saisies possibles et le comportement de l'élément <input> dépend fortement de la valeur indiquée dans son 
attribut type=''.

*/
?>