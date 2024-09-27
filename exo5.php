<h1>Exercice 5</h1>

<p>Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en 
précisant le nom des champs associés.
<br>
<br>
<b>Exemple :</b><br>
<code>$nomsInput = ["Nom","Prénom","Ville"];
afficherInput($nomsInput);
</code>
</p>

<h2>Résultat</h2>

<?php

// Notre array de départ avec les entêtes des inputs
$nomsInput = [
    "Nom", 
    "Prénom", 
    "Ville"
];

echo afficherInput($nomsInput);

// Notre fonction qui va sélectionner chaque élément du tableau pour ensuite lui ajouter un input type text
function afficherInput($nomsInput){
    $resultat = "";
    foreach ($nomsInput as $nomInput) {
        $resultat .= $nomInput."<br>"."<input type='text' name='$nomInput'><br>";

    }
    return $resultat;
}
