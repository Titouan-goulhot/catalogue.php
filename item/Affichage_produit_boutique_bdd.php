    <?php

    include_once ('functions.php');
    include_once ('class_catalogue.php');
    include_once ('class_articles.php');
    
    
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=mydb;port=3306;', 'root', 'root');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    } //Fonction pour query n°1
    $reponse = $bdd->query('SELECT * FROM products WHERE quantity !=0 '); //On rentre les requêtes SQL, dans notre cas on veux faire apparaitre tout les articles 


    while ($donnees = $reponse->fetch()) { /*Pour faire apparaitre chaque articles, il faut créer une boucle While "tant que" tout les articles ne sont pas affichés
    On stock dans un tableau "$donnees" (array) chaque résultat de la boucle "fetch()". 
     cette ligne récupère une nouvelle entrée et place son contenu dans $donnees ; elle vérifie si $donnees  vaut vrai ou faux.
    fetch  renvoie faux ( false  ) dans $donnees  lorsqu'il est arrivé à la fin des données, 
    c'est-à-dire quand toutes les entrées ont été passées en revue. Dans ce cas, la condition du while  vaut "faux" et la boucle s'arrête.*/
    displayItemAvailable($donnees['name'],$donnees['price'], $donnees['picture'], $donnees['quantity']);

    }

    $reponse->closeCursor();
    ?>

    <?php //Fonction pour query n°2
    $reponse = $bdd->query('SELECT * FROM products WHERE quantity = 0 ');
    while ($donnees = $reponse->fetch()) {
    ?>

        <p>
            <strong> PRODUITS INDISPONIBLES</strong>
        </p> <?php
        displayItemNotAvailable($donnees['name'],$donnees['price'], $donnees['picture']);
    
    }
    $reponse->closeCursor();
    ?>

    <?php //Fonction pour query n°3
