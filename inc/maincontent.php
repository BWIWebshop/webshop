<?php
foreach ($productObjects as $product) {
    echo "<div class='col-md-3'>";
    echo "<h4 class='productheading'>" . $product->getName() . "</h4>";
    echo "<img src='../" . $product->getPicture() . "' alt='Tomato' class='img-thumb' />";
    echo "<p class='price'> Our Price $" . $product->getPrice() . "</p>";
    echo "<button type='button' class='btn btn-sm btn-success' data-toggle='modal' data-target='#details-1'>Details</button>";
    echo "</div >";

}
?>

