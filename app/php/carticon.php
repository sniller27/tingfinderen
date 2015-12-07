<div class="cart2"><a href="cart.php"><i class="fa fa-shopping-cart" id="cart2icon"></i><p class="cartamount"><?php echo '1';?></p></a></div>
<?php 


if(isset($_SESSION["vogn"])){
   
    foreach($_SESSION["vogn"] as $key => $val)
    { 
        echo $key. ": ".$val. "<br>";
        echo '<a href="cart.php" class="btn btn-default">Fjern produkt</a><br>';
    }
    
    
    
}
?>