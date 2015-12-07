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

</head>

<body>
    <?php

//header
require_once("php/header.php");

?>
        <div class="container">


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

    //udtrækker personinfo fra database
    while($stmt->fetch()){
        
        ?>

                    <div class="col-xs-6 product">
                        <h1><?= $pname ?></h1>

                        <img src="<?= $pimage ?>" alt="">



                    </div>

                    <div class="col-xs-6 product">
                       <p><?= $pname ?></p> <br/>
                        <p>
                            <?= $price ?>
                        </p>
                        <br>
                        <p>
                            <?= $pdesc ?>
                        </p>
                        <br>

                    </div>

                    <?php
    }
    
    
    ?>

            </main>


        </div>
        <?php 
//footer
require_once("php/footer.php");
    
?>
</body>

</html>