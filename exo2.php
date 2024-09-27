<h1>Exercice 2</h1>

<p>Soit le tableau suivant :<br>
<code>$capitales = <br>
["France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome"]</code>;
Réaliser un algorithme permettant d'afficher le tableau HTML suivant (notez que le nom du pays 
s'affichera en majuscule et que le tableau est trié par ordre alphabétique <b>du nom de pays</b>) grâce à 
une fonction personnalisée.<br>
Vous devrez appeler la fonction comme suit : <code>afficherTableHTML($capitales);</code></p>

<h2>Résultat</h2>

<!-- Notre tableau avec un peu plus de style -->
<style>
    table {
        border-collapse : collapse; /* Ceci permet de conserver les bordures mais de ne pas en créer autour des <th> et <td> */
        text-align: left;
        font-family: Verdana;
    }

    th, td {
        border : 1px solid black;
        padding : 2px 5px;
    }
</style>

<?php

// Notre tableau associatif de départ = partie dynamique de mon tableau sont les valeurs à l'intérieur
$capitales = [
    "France"=>"Paris",
    "Allemagne"=>"Berlin",
    "USA"=>"Washington",
    "Italie"=>"Rome"
];




// La fonction qui va mettre en forme le tableau associatif avec une boucle pour le parcourir
// On ajoute un tableau avec la balise <table>
function afficherTableHTML($capitales) {
    ksort($capitales); // On trie le tableau associatif par ordre alphabétique de la clé
    $result = "<table>
                    <thead>
                        <tr>
                            <th>Pays</th> 
                            <th>Capitale</th>
                        </tr>
                    </thead>
                    <tbody>";           
            foreach($capitales as $pays => $capitale){ // Pour ajouter automatiquement les éléments du tableau, on crée une boucle avec les clés et valeurs du tableau
                $result .= 
                    "<tr>
                        <td>".mb_strtoupper($pays)."</td>
                        <td>$capitale</td>
                    </tr>";  
            }        
    $result .=      "</tbody></table>";

//On retourne une dernière fois le résultat
    return $result;
}

echo afficherTableHTML($capitales);
