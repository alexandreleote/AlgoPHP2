<h1>Exercice 6</h1>

<p>Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau 
de valeurs. <br>
<br>
<b>Exemple :</b><br>
<code>
$elements = ["Monsieur","Madame","Mademoiselle"];<br>
alimenterListeDeroulante($elements);
</code>
</p>

<h2>Résultat</h2>

<?php

// Notre array de départ avec les entêtes des éléments
$elements = [
    "Monsieur", 
    "Madame", 
    "Mademoiselle"
];

echo alimenterListeDeroulante($elements);

// Notre fonction qui va sélectionner chaque élément du tableau pour ensuite lui ajouter un select afin d'en faire une liste déroulante
function alimenterListeDeroulante($elements){
    $resultat = "<select name='name'/>";
            foreach ($elements as $element) {
                $resultat .="<option value='$element'>".$element."</option>";
            }
    $resultat .="</select>";
    return $resultat;
}
