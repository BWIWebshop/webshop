<?php include 'navigationclass.php'; ?>

<nav class="navbar navbar-default navbar-fixed-top">

        <a href="../sites/home.php" class="navbar-brand">Veggies</a>
        <ul class="nav navbar-nav">

                <?php
                $who = "visitor"; //   später dynamisch--> entweder visitor, user oder admin
                $nav = new Navigation();
                $nav->loadXML($who);

                ?>



            <li><a href="#"><span class="floatleft glyphicon glyphicon-shopping-cart" id="pullrightnav" aria-hidden="true" title="Shopping Cart"></span></a></li>

        </ul>

</nav>