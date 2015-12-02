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

<div class="container">
<?php

//header
require_once("php/header.php");

?>

<!-- main -->
<main>
    
        <h1>showproduct</h1>
        
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

        echo '
        <div class="col-xs-3 product">
        <img src="' . $pimage . '" alt="">
        </div>';
        
        echo '<div class="col-xs-3 product">';
        echo $pname . '<br>'
        . $price . '<br>'
        . $pdesc . '<br>
        </div>';
        
        
    }
    
    
    ?>
    
</main>

<?php 
//footer
require_once("php/footer.php");
    
?>
</div>
</body>
</html>
