<h1>Exercice 10</h1>

<p>En utilisant l'ensemble des fonctions personnalisées crées précédemment, créer un formulaire 
complet qui contient les informations suivantes : champs de texte avec nom, prénom, adresse e-mail, ville, sexe et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation : 
« Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ».<br>
<br>
Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement 
de validation (submit).
</p>

<h2>Résultat</h2>

<h3>Formulaire de contact</h3>

<p>Merci de bien vouloir renseigner les champs ainsi que de sélectionner la formation souhaitée.</p>



<?php

/*
//////////
TABLEAUX
//////////
*/

// Notre array de champs à remplir
$champsInput = [
    "Nom", 
    "Prénom",
    "Adresse e-mail", 
    "Ville",
    "Sexe"
];


// Notre liste de formations
$formations = [
    "Développeur Logiciel", 
    "Deisgner Web", 
    "Intégrateur",
    "Chef de projet"
];


$envoi = "<br><input type='submit'>";

/*
//////////
APPEL DES FONCTIONS
//////////
*/


echo afficherInput($champsInput);
echo listeFormation($formations);
echo $envoi;

/*
//////////
FONCTIONS
//////////
*/


// Notre fonction qui va sélectionner chaque élément du tableau pour ensuite lui ajouter un input type text
function afficherInput($champsInput){
    $resultat = "<label for='renseignements'>Renseignez vos informations:</label><br>";
    foreach ($champsInput as $champInput) {
        $resultat .= $champInput."<br>"."<input type='text' name='$champInput'><br>";

    }
    return $resultat;
}


// Notre fonction qui va sélectionner chaque élément du tableau pour ensuite lui ajouter un select afin d'en faire une liste déroulante
function listeFormation($formations){
    $resultat = "<br><label for='formation'>Sélectionnez la formation souhaitée:</label><br>
        <select name='name'/>";
            foreach ($formations as $formation) {
                $resultat .="<option value='$formation'>".$formation."</option>";
            }
    $resultat .="</select><br>";
    return $resultat;
}

