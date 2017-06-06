<?php

include '../utility/DB.class';
include '../model/Produkt.class';
$db = new DB();
$productObjects = $db->getProductList(2);
include '../inc/head.php';
include '../inc/navigation.php';
?>
    <div class="container">
    <div class="col-md-12">
    <div class="row">
        <h2 class="text-center">Vegetables</h2>
        <?php include '../inc/maincontent.php'; ?>

    </div>


<?php include '../inc/footer.php'; ?>