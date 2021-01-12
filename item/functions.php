<?php
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


function displayItemAvailable($nom, $prix, $photo, $quantity)
{

    echo "<p><Strong>Produits</Strong>" . $nom . "<br />" . $photo . "<br />";
    echo "Le Prix de cet article est de : " . $prix . "€, disponible en " . $quantity . " Exemplaires </p>";
?>
    <div class="checkbox">
        <label>

            <input type="checkbox" id="$donnees['id']" name=$id value=" $donnees['price']">


        </label>
    </div>

    <input type="number" name="quantity" value="0" min=0 />

<?php
}


function displayItemNotAvailable($nom, $prix, $photo)
{
    echo $nom . "\n";
    echo $prix;
    echo "<img src=" . $photo . ">";
}




function displayCat()
{
    foreach ($articles as $article)
        if ($article->getavailable()) {

            displayItemAvailable($article['id'], $article['name'], $article['price'], $article['picture']);
        } else {

            displayItemNotAvailable($article['id'], $article['name'], $article['price'], $article['picture']);
        }
}


?>