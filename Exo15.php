<?php

$email = array("elan@elan-formation.fr","contact@elan");

function verifEmail($email){
        
    foreach ($email as  $mail) {
        
        if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            echo "L'adresse email <span style='font-weight:bold'>".$mail."</span> est considérée comme valide.<br>";
        } else {
            echo "L'adresse email <span style='font-weight:bold'>".$mail."</span> est considérée comme invalide.<br>";
        }
    }
}

echo verifEmail($email);
?>