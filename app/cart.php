<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="da">
<head>

<!-- title -->
<title>Tingfinderen.dk</title>
        
<!-- Pane Description -->
<meta name="description" content="Her kan du lægge ting ting i din indkøbsvogn.">

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
    
    <h1>Indkøbsvogn</h1>
    <?php 
    if(isset($_SESSION["vogn"])){
   
    foreach($_SESSION["vogn"] as $key => $val)
    { 
        echo $key. ": ".$val. "<br>";
        echo '<a href="cart.php" class="btn btn-default">Fjern produkt</a><br>';
    }
    
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
