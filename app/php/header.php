<?php

//active site in navbar
$frontpage = "";
$shop = "";
$about = "";
$contact = "";


//vælger en id til den aktive side
$currentsite = basename($_SERVER['PHP_SELF'], ".php");
if($currentsite == 'index'){

    $frontpage = 'id="active"';

}else if($currentsite == 'shop'){
    
    $shop = 'id="active"';

}else if($currentsite == 'about'){

    $about = 'id="active"';

}else if($currentsite == 'contact'){

    $contact = 'id="active"';

}



?>
   
   
   
<!--   header-->
    <div class="navbar navbar-default navbar-static-top">


        <div class="container">


            <div class="navbar-header">

                <a href="index.php"><img src="images/logo.png" alt="Tingfinderen logo" id="logo"></a>

                <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse" id="nav-icon4">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <span class="cartamount" id="notification">1</span>
            </div>

            <!--mobile menu-->
            <div class="collapse navbar-collapse navHeaderCollapse">

                <ul class="nav navbar-nav navbar-right verticalalign">


                    <li><a href="index.php" <?= $frontpage ?> class="uppercase hvr-underline-from-center">Forside</a></li>
                    <li><a href="shop.php" <?= $shop ?> class="uppercase hvr-underline-from-center">Shop</a></li>
                    <li><a href="about.php" <?= $about ?> class="uppercase hvr-underline-from-center">Info</a></li>
                    <li><a href="contact.php" <?= $contact ?> class="uppercase hvr-underline-from-center">Kontakt</a></li>
                    <li><a href="#" class="uppercase hvr-underline-from-center">Tyskenhavn.dk</a></li>
                    
<!--                    CART IN MENU-->
                    <li><a href="cart.php"><i class="fa fa-shopping-cart" style="font-size:30px;"></i><p class="cartamount">1</p></a></li>

<!--
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mere<b class="caret"></b></a>
                        <ul class="dropdown-menu">

                            <li><a href="admin.php">Admin login</a></li>

                        </ul>
                    </li>
-->
                

                </ul>

            </div>


        </div>

    </div>
