<?php
session_start();

//customerfeedback
$feedback = '';

//checks if product has been added to the cart by using get parameter
if(isset($_GET['productid']) && isset($_GET['qty'])){
    
    $pid = $_GET['productid'];
    $qty = $_GET['qty'];

    $stock = 0;

    require_once("php/config.php");
    
    //SQL query that select product stock
    $sql = "select stock from products where idproducts = ? LIMIT 1";

    //prepared statement for produkt info
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $pid);
    $stmt->bind_result($pstockid);
    $stmt->execute();
    
    //saves stock as variable
    while($stmt->fetch()){
        
        $stock = $pstockid;
        
    }

    //checks if shoppingcart is set
    if(isset($_SESSION["items"][$pid])){
        
        //compares stock quantity to shoppingcart quantity of the product
        if($_SESSION["items"][$pid]>=$stock){
    
            $feedback = '<h1 class="userwarning">Vi har ikke flere af dette produkt på lager</h1>';

        }else {
        //adds product to shoppingcart quantity
            $_SESSION["items"][$pid] += $qty;

            $feedback = '<h1 class="usersucces">Tilføjet til vogn</h1>';

        }
        
        }else {
        //creates key to items with productid and quantity
                $feedback = '<h1 class="usersucces">Tilføjet til vogn</h1>';
                $_SESSION["items"][$pid] = $qty;

        }

}

?>
<!DOCTYPE html>
<html lang="da">

    <head>

        <!-- title -->
        <title>Tingfinderen.dk | Produktside</title>

        <!-- Pane Description -->
        <meta name="description" content="Velkommen til Tindfinderen.dk">

        <?php

        //head info
        require_once("php/head.php");

        ?>
            
        <!--Colorbox links-->
        <link rel="stylesheet" href="plugins/colorbox/colorbox.css" />
        <script src="plugins/colorbox/jquery-1.11.1.js"></script>
        <script src="plugins/colorbox/jquery.colorbox.js"></script>
        <script src="plugins/colorbox/colorbox.js"></script>

    </head>

    <body>
       
        <?php

        //header
        require_once("php/header.php");

        ?>
            <div class="container">

                <div class="row">

                    <!-- main -->
                    <main>

                        <?php 
    //checks if a get parameter is set
    if(isset($_GET['productid'])){
        
            $productid = $_GET['productid'];
        
    }
    
    require_once("php/config.php");
                        
    //selects information about product
    $sql = "select productname, productdescription, price, mainimage  from products where idproducts = ? limit 1";    
    
    //prepared statement for productinfo
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $productid);
    $stmt->bind_result($pname, $pdesc, $price, $pimage);
    $stmt->execute();
    
    //printing products with database information
    while($stmt->fetch()){
        
        ?>

<!--                           breadcrumbs-->
                            <div class="col-xs-12">

                                <ol class="breadcrumb top-buffer">
                                   
                                    <li><a href="shop.php">Shop</a></li>
                                    <li class="active"><?= $pname ?></li>
                                    
                                </ol>

                                <?= $feedback ?>
                                
<!--                                productname-->
                                <h1><?= $pname ?></h1>

                            </div>
                            
<!--                            productimage-->
                            <div class="col-sm-6 productpage">

                                <img src="<?= $pimage ?>" alt="<?= $pname ?>">


                            </div>

<!--                           productinformation and button-->
                            <div class="col-sm-6 product">
                                <p>
                                    <?= $pdesc ?>
                                </p>
                                <br>
                                <h2>
                                    <?= $price ?> kr,-
                                </h2>
                                <br>
                                <a href="<?= $_SERVER['PHP_SELF'] ?>?productid=<?= $productid ?>&amp;qty=1" class="btn graybutton sharp">Læg i vogn<i class="fa fa-shopping-cart"></i></a>
                            </div>

<!--                           Colorbox slides-->
                            <div class="col-xs-12">
                                <p>Klik på billederne for at se forstørret udgave.</p>
                                <?php
    }
    
    //prepared statement
    $sqlimg = "select imagesource from productimages where products_idproducts = ?";
    $stmtimg = $conn->prepare($sqlimg);
    $stmtimg->bind_param('i', $productid);
    $stmtimg->bind_result($imgsrc);
    $stmtimg->store_result();
    $stmtimg->execute();
         while($stmtimg->fetch()){ 
             
    ?>
             
<!--colorbox billeder-->
<a class='gallery' href='<?= $imgsrc ?>'><img src="<?= $imgsrc ?>" class="colorboxpic" alt="produktbilled" /></a>

    <?php
            
}
    ?>
                            </div>

                    </main>

                </div>

            </div>

        <?php 
        //footer
        require_once("php/footer.php");

        ?>
    </body>

</html>