<!DOCTYPE html>

<?php

include '../utility/DB.php';
include '../model/Produkt.php';
$db = new DB();
include '../inc/head.php';
include '../inc/navigation.php';
include '../inc/headerfull.php';
//include '../inc/leftsidebar.php';
$productObjects = $db->getFeaturedProductsList();
?>

<div class="container">
    <div class="col-md-12">
        <div class="row">
            <h2 class="text-center">Featured Products</h2>
            <?php include '../inc/maincontent.php'; ?>

        </div>


        <?php include '../inc/footer.php'; ?>
