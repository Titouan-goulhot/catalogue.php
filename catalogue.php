<!DOCTYPE html>
<html>
    <head>
        <title>Ceci est une page de test avec des balises PHP</title>
        <meta charset="utf-8" />
    </head>
    <body> 


<?php
// Comme la page item.php, on reprend nos articles (nom/image/prix) dans un tableaux, comprenant lui même plusieurs tableaux, 1 par article

//$article = ['Nom', 'photo', 'prix'];

$articles = [ //Déclaration de notre tableau
    [
        'Nom' => 'Willy Roller 2006',
        'photo' => "https://s2.qwant.com/thumbr/0x380/4/2/3691c2fc336782290febaab599a4afc92a8f6aba6ba61957925d5655de67c0/econome-moderne-horizontal-publicitaire-personnalisable-0434944.jpg?u=https%3A%2F%2Fwww.vegea.com%2FDos-Imgs%2Feconome-moderne-horizontal-publicitaire-personnalisable-0434944.jpg&q=0&b=1&p=0&a=1",
        'prix' => 14.99
    ],
    [
        'Nom' => 'Econome Gefu',
        'photo' => "https://s2.qwant.com/thumbr/0x380/d/4/c12fa1fe29be99df7c80fabefe061eddf2426d891bc9032bb088bdc36efee1/econome-10_781317.jpg?u=https%3A%2F%2Fcdn.habitat.fr%2Fthumbnails%2Fproduct%2F781%2F781317%2Fbox%2F1200%2F1200%2F80%2Feconome-10_781317.jpg&q=0&b=1&p=0&a=1",
        'prix' => 19.99

    ],
    [
        'Nom' => 'Zyliss',
        'photo' => "https://s1.qwant.com/thumbr/0x380/3/5/281e7235409f38bff8aa18706d9f739e2184b5c0c73b9d8a06833ad86faa10/econome-gefu-primeline-acier-inox-pointe-aiguisee.jpg?u=https%3A%2F%2Fmedia1.couteauxduchef.com%2F33531%2Feconome-gefu-primeline-acier-inox-pointe-aiguisee.jpg&q=0&b=1&p=0&a=1",

        'prix' => 25.99
    ]
];


foreach($articles as $article){ //On appel dans notre boucle notre tableau $articles et on créé une autre $variable temporaire qui ne marche QUE dans cette fonction car elle n'est pas en global //Ensuite on lui demande d'imprimer, à chaque itération, le Nom, le prix et la photo de chaque article


    echo $article ['Nom']."\n"; echo $article['prix']; echo "<img src=" . $article['photo'] . ">";
     
    
}
?>

    
    </body>