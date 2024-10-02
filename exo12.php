<h1>Exercice 12</h1>

<p>La fonction <code>var_dump($variable)</code> permet d'afficher les informations d'une variable.<br>
Soit le tableau suivant :<br> 
<code>$tableauValeurs=[true,"texte",10,25.369,["valeur1","valeur2"]];</code><br>
A l'aide d'une boucle, afficher les informations des variables contenues dans le tableau.
</p>

<h2>Résultat</h2>

<?php


$tableauValeurs = [
    true, 
    "texte", 
    10,
    25.369, 
    ["valeur1", "valeur2"]
];

foreach($tableauValeurs as $valeur){
    echo var_dump($valeur)."<br>";
}