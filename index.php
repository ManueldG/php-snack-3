<?

/* 
SNACK 3
Creare un array di array.
Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007
e come valore un array di post associati a quella data.
Stampare ogni data con i relativi post.
Qui l’array di esempio:
https://www.codepile.net/pile/R2K5d68z
codepile.netcodepile.net
CodePile | Easily Share Piles of Code
{{ description }}
*/
include 'lista.php';

foreach ($posts as $k=>$value) {
    
    foreach ($value as $elem)
        
            echo " $k :  ".$elem['title']." ".$elem['author']." ".$elem['text']." |<br>";
} 



?>