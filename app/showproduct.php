<?php 
$feedback = '';
if(isset($_GET['productid']) && isset($_GET['qty'])){
    
    $id = $_GET['productid'];
    $qty = $_GET['qty'];
    

    //opretter en session med produktet
    $_SESSION['items'][$id]= $qty;
    
    $feedback = '<h1 style="color:green">Tilføjet til vogn</h1>';
    
}

?>
    <!DOCTYPE html>
    <html lang="da">

    <head>

        <!-- title -->
        <title>Tingfinderen.dk</title>

        <!-- Pane Description -->
        <meta name="description" content="Velkommen til Tindfinderen.dk">

        <?php

//head info
require_once("php/head.php");

?>

            <!--colorbox links-->
            <link rel="stylesheet" href="plugins/colorbox/colorbox.css" />
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
    
    if(isset($_GET['productid'])){
        
            $productid = $_GET['productid'];
        
        
    }
    
    
    
    require_once("php/config.php");
 

    //vælger alt information som er tilknyttet projektet og den der har oprettet det
    $sql = "select productname, productdescription, price, mainimage  from products where idproducts = ?";    
    
    //prepared statement for produkt info
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $productid);
    $stmt->bind_result($pname, $pdesc, $price, $pimage);
    $stmt->execute();
                
    //images
         $sqlimg = "select imagesource from productimages where products_idproducts = ?";    
    
           
    //udtrækker personinfo fra database
    while($stmt->fetch()){
        
        ?>


                            <div class="col-xs-12">

                                <ol class="breadcrumb">
                                    <li><a href="shop.php">Shop</a></li>
                                    <li class="active"><?= $pname ?></li>
                                </ol>

                                <?= $feedback ?>
                                    <h1><?= $pname ?></h1>

                            </div>
                            <div class="col-sm-6 productpage">

                                <img src="<?= $pimage ?>" alt="">



                            </div>

                            <div class="col-sm-6 product">
                                <p>
                                    <?= $pdesc ?>
                                </p>
                                <br>
                                <p>
                                    <?= $price ?> kr
                                </p>
                                <br>
                                <a href="<?= $_SERVER['PHP_SELF'] ?>?productid=<?= $productid ?>&qty=1" class="btn btn-default">Læg i vogn<i class="fa fa-shopping-cart"></i></a>
                            </div>

                            <div class="row">

                                <div class="col-xs-12">
                                    <p>Klik på billederne for at se forstørret udgave.</p>
                                    <?php
    }
    
    //prepared statement for produkt info
    $stmtimg = $conn->prepare($sqlimg);
    $stmtimg->bind_param('i', $productid);
    $stmtimg->bind_result($imgsrc);
    $stmtimg->store_result();
    $stmtimg->execute();
         while($stmtimg->fetch()){ 
             
             ?>


                                        <!--                                    <img src="<?= $imgsrc ?>" class="productpics" alt="">-->
                                        <!--colorbox billeder-->

                                        <a class='gallery' href='<?= $imgsrc ?>'><img src="<?= $imgsrc ?>" height="80" style="border: 1px solid gray;" alt="pic1" /></a>




                                        <?php
            
}
    ?>
                                </div>


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