<?php 
session_start();

//customerfeedback
$customerfeedback = '';

if(isset($_GET['id'])){
    
    $deleteproductid = $_GET['id'];
    
    unset($_SESSION['items'][$deleteproductid]);
    
    //sikker måde at slette sessions på
// Unset all of the session variables.
//$_SESSION = array();

// If it's desired to kill the session, also delete the session cookie.
// Note: This will destroy the session, and not just the session data!
//if (ini_get("session.use_cookies")) {
//    $params = session_get_cookie_params();
//    setcookie(session_name(), '', time() - 42000,
//        $params["path"], $params["domain"],
//        $params["secure"], $params["httponly"]
//    );
//}

// Finally, destroy the session.
//session_destroy();
    
    $customerfeedback = 'Produkt fjernet';
    
}




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
    
    echo $customerfeedback;
    
    if(isset($_SESSION["items"])){
   
    foreach($_SESSION["items"] as $key => $val)
    { 
        echo $key. ": ".$val. " stk<br>";
        echo '<a href="cart.php?id='.$key.'" class="btn btn-default">X</a><br>';
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
