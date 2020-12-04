
<?php
/*$item1 = //Déclaration de notre tableau
    [ //displayItem1()
        'Nom' => 'Willy Roller 2006',
        'photo' => "https://s2.qwant.com/thumbr/0x380/4/2/3691c2fc336782290febaab599a4afc92a8f6aba6ba61957925d5655de67c0/econome-moderne-horizontal-publicitaire-personnalisable-0434944.jpg?u=https%3A%2F%2Fwww.vegea.com%2FDos-Imgs%2Feconome-moderne-horizontal-publicitaire-personnalisable-0434944.jpg&q=0&b=1&p=0&a=1",
        'prix' => 14.99
    ];
$item2 =
    [ //displayItem2()
        'Nom' => 'Econome Gefu',
        'photo' => "https://s2.qwant.com/thumbr/0x380/d/4/c12fa1fe29be99df7c80fabefe061eddf2426d891bc9032bb088bdc36efee1/econome-10_781317.jpg?u=https%3A%2F%2Fcdn.habitat.fr%2Fthumbnails%2Fproduct%2F781%2F781317%2Fbox%2F1200%2F1200%2F80%2Feconome-10_781317.jpg&q=0&b=1&p=0&a=1",
        'prix' => 19.99

    ];
$item3 =
    [ //displayItem3()
        'Nom' => 'Zyliss',
        'photo' => "https://s1.qwant.com/thumbr/0x380/3/5/281e7235409f38bff8aa18706d9f739e2184b5c0c73b9d8a06833ad86faa10/econome-gefu-primeline-acier-inox-pointe-aiguisee.jpg?u=https%3A%2F%2Fmedia1.couteauxduchef.com%2F33531%2Feconome-gefu-primeline-acier-inox-pointe-aiguisee.jpg&q=0&b=1&p=0&a=1",

        'prix' => 25.99
    ];



/*function displayItem1()
{
    //Pour ne pas à avoir à redéfinir en local ce que l'on veut afficher, on utilise global $NomDeLaVariable; en dehors de la fonction
    global $item1;
    //On lui demande ensuite d'imprimer les différents éléments de notre variable dans la function displayItem1()
    echo $item1['Nom'] . "\n";
    echo $item1['prix'];
    echo "<img src=" . $item1['photo'] . ">";
} //Et enfin, on appelle notre fonction
displayItem1();

function displayItem2()
{
    global $item2;

    echo $item2['Nom'] . "\n";
    echo $item2['prix'];
    echo "<img src=" . $item2['photo'] . ">";
}
displayItem2();

function displayItem3()
{
    global $item3;

    echo $item3['Nom'] . "\n";
    echo $item3['prix'];
    echo "<img src=" . $item3['photo'] . ">";
}
displayItem3();
?>
*/
<?php
function displayItem(['Nom']) {
echo $item1;
}
displayItem($item1);
?>