<h1>Exercice 14</h1>

<p>En utilisant les ressources de la page <b>http://php.net/manual/fr/book.filter.php</b>, vérifier si une adresse e-mail a le bon format.<br>
L'adresse <b>contact@elan</b> est une adresse e-mail invalide.</p>

<h2>Résultat</h2>

<?php

$email1 = "elan@elan-formation.fr";
$email2 = "contact@elan";


// On crée notre fonction pour déterminer si l'adresse e-mail est correcte
function verifierEmail($email){
    // On utilise la fonction 'filter_var' sur la variable '$email' en appliquant le filtre 'FILTER_VALIDATE_EMAIL' pour s'assurer que l'adresse mail est conforme
    if (filter_var($email, FILTER_VALIDATE_EMAIL)){ 
        return "L'adresse <b>$email</b> est une adresse e-mail valide<br>";
    } else {
        return "L'adresse <b>$email</b> est une adresse e-mail invalide<br>";
    }
}

echo verifierEmail($email1);
echo verifierEmail($email2);