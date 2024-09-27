<h1>Exercice 8</h1>

<p>Soit l'URL suivante : <b>http://my.mobirise.com/data/userpic/764.jpg</b><br>
Créer une fonction personnalisée permettant d'afficher l'image N fois à l'écran.<br>
<br>
<b>Exemple :</b><br>
<code>repeterImage($url,4);</code>

</p>

<h2>Résultat</h2>

<?php

$url = urldecode("http://my.mobirise.com/data/userpic/764.jpg");
echo $url;