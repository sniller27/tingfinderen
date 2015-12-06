<!DOCTYPE html>
<html lang="da">
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

<div class="container">
<!-- main -->
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
    
    
    <div class="col-sm-3 product productsize">
       
        <a href="showproduct.php?productid=<?= $row['idproducts']; ?>">
        <p class="textoverlay"><?= $row['productname']; ?></p>
        <img src="<?= $row['mainimage']; ?>" alt="" />
        </a>
        
    </div>
    
    
    <?php
    }
    
    
    ?>
    </div>
</main>

<?php 
//footer
require_once("php/footer.php");
    
?>
</div>
</body>
</html>
