<h1>Exercice 4</h1>

<p>A partir de l'exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra 
le lien hypertexte de la page Wikipédia de la capitale (le lien hypertexte devra s'ouvrir dans un 
nouvel onglet et le tableau sera trié par ordre alphabétique <b>de la capitale</b>).
<br>
<br>
On admet que l'URL de la page Wikipédia de la capitale adopte la forme :<br>
https://fr.wikipedia.org/wiki/
<br>
<br>
Le tableau passé en argument sera le suivant :
<code>$capitales = ["France"=>"Paris","Allemagne"=>"Berlin",
"USA"=>"Washington","Italie"=>"Rome","Espagne"=>"Madrid"];</code>
</p>

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
                            <th>Lien</th>
                        </tr>
                    </thead>
                    <tbody>";           
            foreach($capitales as $pays => $capitale){ // Pour ajouter automatiquement les éléments du tableau, on crée une boucle avec les clés et valeurs du tableau
                $result .= 
                    "<tr>
                        <td>".mb_strtoupper($pays)."</td>
                        <td>$capitale</td>
                        <td><a href=https://fr.wikipedia.org/wiki/$capitale target= _blank>Lien</a></td> 
                    </tr>";  
            }        
    $result .=      "</tbody></table>";
    

//On retourne une dernière fois le résultat
    return $result;
}

echo afficherTableHTML($capitales);

