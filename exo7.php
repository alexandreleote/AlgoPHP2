<h1>Exercice 7</h1>

<p>Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser 
dans le tableau associatif si la case est cochée ou non.
<br>
<br>
<b>Exemple :</b><br>
<code>genererCheckbox($elements);</code><br>
<font color=#DAA520>//où $elements est un tableau associatif clé => valeur avec 3 entrées.</font>

</p>

<h2>Résultat</h2>

<?php


// Notre array de départ avec les entêtes des éléments
$elements = [
    "Choix 1" => "", 
    "Choix 2" => "checked", 
    "Choix 3" =>  ""
];

echo genererCheckBox($elements);

// Notre fonction qui va sélectionner chaque élément du tableau pour en faire des checkbox
function genererCheckBox($elements){
    $resultat = "" ;
    foreach ($elements as $element => $number) {
            $resultat .= "<input type='checkbox' name='$element' $number>".$element."<br>"; // On reprend la balise checked depuis le tableau associatif au travers de la valeur de ce dernier
            }

    return $resultat;
}
