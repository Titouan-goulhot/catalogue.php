<?php
include_once('catalogue.php'); // identique à include
global $items; // "import" de la variable dans ce fichier

//var_dump($_POST['qt']);
?>
<?php foreach ($items as  $index => $item) { ?>
    <?php echo $item["name"]; ?><br>
    <?php echo $item["picture"]; ?> m<br>
    <?php echo $item["price"]; ?> €<br>
    <input type="number" name="qt[<?php echo $index; ?>]" value="">
    <!-- ici on a pas le droit de fixer la value -->
    <hr>
<?php } ?>
<?
foreach ($_POST['quantity'] as $index => $quantity) {
    // var_dump($index); // On debug
    //var_dump($quantity); // On debug
    $item = $items[$index];
    echo $item['name'] . ' : ' . $quantity . '<br>';
    echo $item['price'] * $quantity . ' €';
    echo '<br>';
}
?>