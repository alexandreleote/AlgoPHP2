<h1>Exercice 11</h1>

<p>Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d'une chaîne de caractère représentant une date.<br>
<br>
<b>Exemple :</b><br>
<code>formaterDateFr("2018-02-23");</code></p>

<h2>Résultat</h2>

<?php



function formaterDateFr($date){
    // On crée l'objet avec la fonction new pour ensuite l'utiliser et changer la chaîne de caractères numériques en mots
    $now = new DateTime($date);
    // On crée le formatage à partir duquel on change l'affichage, pareil on crée un objet
    $fmt = new IntlDateFormatter(
        "fr_FR",
        IntlDateFormatter::FULL,
        IntlDateFormatter::NONE
    );
    // On applique le formatage à l'objet $now= new DateTime($date)
    echo $fmt->format($now);
}

formaterDateFr("2018-02-23");