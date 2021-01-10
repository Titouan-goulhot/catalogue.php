<?php
include_once('catalogue.php'); // identique à include
global $items; // "import" de la variable dans ce fichier

//var_dump($_POST['qt']);
?>
<?php foreach ($items as  $index => $item) { ?>
    <?php echo $item["Nom"]; ?><br>
    <?php echo $item["photo"]; ?> m<br>
    <?php echo $item["prix"]; ?> €<br>
    <input type="number" name="qt[<?php echo $index; ?>]" value="">
    <!-- ici on a pas le droit de fixer la value -->
    <hr>
<?php } ?>
<?
foreach ($_POST['quantity'] as $index => $quantity) {
    // var_dump($index); // On debug
    //var_dump($quantity); // On debug
    $item = $items[$index];
    echo $item['Nom'] . ' : ' . $quantity . '<br>';
    echo $item['prix'] * $quantity . ' €';
    echo '<br>';
}
?>