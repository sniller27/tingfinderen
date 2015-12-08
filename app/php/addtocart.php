<?php 

if(isset($_GET['id']) && isset($_GET['qty'])){
    
    $id = $_GET['id'];
    $qty = $_GET['qty'];
    

    //opretter en session med produktet
    $_SESSION['items'][$id]= $qty;
    
    echo 'done';
}else{
    
    echo 'not';
}

?>