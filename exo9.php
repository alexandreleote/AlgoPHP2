<h1>Exercice 9</h1>

<p>Créer une fonction personnalisée permettant d'afficher des boutons radio avec un tableau de 
valeurs en paramètre ("Monsieur","Madame","Mademoiselle").<br>
<br><b>Exemple :</b><br>
<code>afficherRadio($nomsRadio);</code>
</p>

<h2>Résultat</h2>

<?php


// Notre array de départ avec les éléments radio
$nomsRadio = [
    "Masculin", 
    "Féminin", 
    "Autre"
];

echo afficherRadio($nomsRadio);

// Notre fonction qui va sélectionner chaque élément du tableau pour en faire des inputs radio
function afficherRadio($nomsRadio){
    $resultat = "";
    foreach ($nomsRadio as $nomRadio) {
        $resultat .= "<input type='radio' name='name'>".$nomRadio."<br>";

    }
    return $resultat;
}
