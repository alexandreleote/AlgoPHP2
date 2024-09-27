<h1>Exercice 1</h1>

<p>Créer une fonction personnalisée <code>convertirMajRouge()</code> permettant de transformer une chaîne de caractère passée en argument en majuscules et en rouge.<br>
Vous devrez appeler la fonction comme suit : <code>convertirMajRouge($texte);</code></p>

<h2>Résultat</h2>

<!-- On ajoute une balise style pour donner une classe à notre élément <p> par après -->
<style>
    .red{
        color : red;
    }
</style>

<?php

// Ma chaîne de caractères de départ à transformer en capitales et adopter la couleur rouge

$texte = "Mon texte en paramètre" ;

// On crée la fonction de transformation du texte en convertissant tous les caractères avec mb_strtoupper
function convertirMajRouge($texte) {
    return "<p class='red'>".mb_strtoupper($texte)."</p>";
}

// On appelle notre fonction
echo convertirMajRouge($texte);