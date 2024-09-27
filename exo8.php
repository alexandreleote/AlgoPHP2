<h1>Exercice 8</h1>

<p>Soit l'URL suivante : <b>http://my.mobirise.com/data/userpic/764.jpg</b><br>
Créer une fonction personnalisée permettant d'afficher l'image N fois à l'écran.<br>
<br>
<b>Exemple :</b><br>
<code>repeterImage($url,4);</code>

</p>

<h2>Résultat</h2>

<?php


$url = "http://my.mobirise.com/data/userpic/764.jpg";


echo repeterImage($url, 4);

// Notre fonction répeter l'image
function repeterImage($url, $i){ // on veut que l'action agisse sur $url $i nombre de fois où $i augmente en fonction du nombre ci-dessus
    $repeat = ""; // On crée un string dans lequel contenir notre URL multiplié
    for ($j = 0; $j < $i; $j++){ // Ici $j sert à répéter l'action jusqu'à arriver à $i
        $repeat .= "<img src=$url alt='Un chihuahua tenant un chausson'>"; // On concatène le tout 
    }
    return $repeat; // On retourne la variable contenant l'URL
}