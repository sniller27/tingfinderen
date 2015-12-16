<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="da" class="no-js">
<head>

<!-- title -->
<title>Tingfinderen.dk</title>
        
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
        <div class="col-xs-12 product"><h1>Produkter</h1></div>
    
    
    <?php 
    
    require_once("php/config.php");
    
    //SQL query
    $sql = "select * from products";

    //forbinder query til MySQL
    $result = $conn->query($sql);

    //udtrækker fra database
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
    
<!--
    <a href="showproduct.php?productid=<?= $row['idproducts']; ?>">
      <div class="col-xs-6 col-sm-3 product productsize" style="background-image: url(<?= $row['mainimage']; ?>);background-size: cover;">
       
        <div class="productshopcontainers">
            
            <h2><?= $row['productname']; ?></h2>
            
        </div>
        
      </div>
    </a>
-->
    
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
