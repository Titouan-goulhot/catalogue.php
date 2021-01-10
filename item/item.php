<!DOCTYPE html>
<html>
    <head>
        <title>Ceci est une page de test avec des balises PHP</title>
        <meta charset="utf-8" />
    </head>
    <body>

    
    <?php // En Php pour déclarer une variable il faut ouvrir une balise <?php
        $titre = "Voici notre produit : <strong>Le Willy Roller Two Thousand Six</strong>"; // On peut stocker plusieurs types de de "valeurs" dans une variable, ici c'est du texte
        echo $titre; //Pour "imprimer" le résultat de notre variable, il faut utiliser la commande "echo"
    ?>
    
        <?php //Ici, notre variable à pour "valeur" un lien URL, soit une suite de caractère, 
        $url = "https://s2.qwant.com/thumbr/0x380/4/2/3691c2fc336782290febaab599a4afc92a8f6aba6ba61957925d5655de67c0/econome-moderne-horizontal-publicitaire-personnalisable-0434944.jpg?u=https%3A%2F%2Fwww.vegea.com%2FDos-Imgs%2Feconome-moderne-horizontal-publicitaire-personnalisable-0434944.jpg&q=0&b=1&p=0&a=1"; 
        echo "<img src=$url alt='photo du Willy Roller 2006'>"; // Et nous retourne une image.
        ?>
            
          <?php // notre variable peut stocker des décimales (float)// des entiers (int) mais aussi des calcules
          $prix = 14.99;
          $prixR = 14.99*2;
          $prixG = 14.99*5/2;
          
          echo "Pour la modique somme de <strong> $prix $</strong> A l'unité !";?>
           <?php echo " Prix réduit pour 2 produits achetés : <strong> $prixR $ </strong>";// On appel ensuite notre $variable pour qu'elle affiche le résultat ?>
           <?php echo "Prix réduit pour 3 produit achetés : <strong> $prixG $ </strong> + un filet de pomme de terre";?>
           
    
    </body>
    
</html>