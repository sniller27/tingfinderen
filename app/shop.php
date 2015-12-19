<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="da">
<head>

<!-- title -->
<title>Tingfinderen.dk | Shop</title>
        
<!-- Pane Description -->
<meta name="description" content="Her kan se udvalget alle vores flotte produkter">

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

<!--ORIGINAL GRID-->
<div class="container">
  
<main>
    
    <div class="row">
    
<!--    product header-->
    <div class="col-xs-12 product">
    <h1>Produkter</h1>
    </div>
    
    <?php 
    
    require_once("php/config.php");
    
    //SQL query to select all products
    $sql = "select * from products";

    //connects to db
    $result = $conn->query($sql);

    //gets data from db and prints out products
    while($row = $result->fetch_array()){

    ?>
    
    <div class="col-xs-6 col-sm-3 product productsize nopadding">

        <a href="showproduct.php?productid=<?= $row['idproducts']; ?>">
                <img src="<?= $row['mainimage']; ?>" alt="<?= $row['productname']; ?>" class="separator" />
        </a>
         
        <div class="productinfoshop">
        <p><?= $row['productname']; ?></p>
        <h2><?= $row['price']; ?> kr,-</h2>
        </div>
    </div>
    
    <?php
        
    }
        
    ?>
    </div>
</main>

</div>

<?php 
//footer
require_once("php/footer.php");
    
?>

</body>
</html>
