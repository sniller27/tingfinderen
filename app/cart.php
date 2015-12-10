<?php 
session_start();

//customerfeedback
$customerfeedback = '';
$sessionids = '';

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

<!--             buying process -->
                 <div class="row">
                  <div class="col-xs-12">

                                <ol class="breadcrumb top-buffer">
                                    <li class="active">
                                        Indkøbsvogn
                                    </li>
                                    <li><a class="textdecoration">Kasse</a></li>
                                    <li><a class="textdecoration">Betaling</a></li>

                                </ol>

                    </div>
                  </div> 
                   
                    <h1>Indkøbsvogn</h1>
                    <?php 
    
    echo $customerfeedback;
    
    if(isset($_SESSION["items"])){
   
    foreach($_SESSION["items"] as $key => $val)
    { 
        $sessionids .= $key . ',';
        ?>
   
<!--
                        <div class="row bot-buffer cartproduct">

                            <div class="col-sm-12">

                                <p>
                                    <?= $key ?> :
                                        <?= $val ?> stk</p>
                              
                                <a href="cart.php?id=<?= $key ?>" class="btn btn-default">X</a>
                                <br>

                            </div>

                        </div>
-->


                        <?php
    
    }
        
    //save ids for SQL
    $sessionids = rtrim($sessionids, ',');
        
    require_once("php/config.php");
    
    //SQL query
    $sql = "select * from products where idproducts in ($sessionids)";

    //forbinder query til MySQL
    $result = $conn->query($sql);

    $totalprice = 0;
    //udtrækker fra database
    while($row = $result->fetch_array()){
    
    $productid = $row['idproducts'];
    $productqty = $_SESSION["items"][$productid];
    $totalproductprice = $row['price']*$productqty;
    $totalprice += $totalproductprice;
    
    ?>

                        <div class="cartproductcontainer bot-buffer">
                            <div class="row bot-buffer cartproduct">

                                <div class="col-sm-3">
                                    
                                    <h2><?= $row['productname']; ?></h2>
                                    <img src="<?= $row['mainimage']; ?>" alt="" />
                                    
                                </div>
                                
                                <div class="col-sm-3">
                                    
                                    <h2>Pris <?= $row['price']; ?> kr,-</h2>
                                    
                                </div>
                                
                                <div class="col-sm-2">
                                    
                                    <h2><?= $productqty ?> stk</h2>

                                </div>
                                
                                <div class="col-sm-3">
                                    
                                    <h2><?= $totalproductprice ?> kr,-</h2>

                                </div>
                                <div class="col-sm-1">
                                    
                                    <a href="cart.php?id=<?= $productid ?>" class="btn btn-default">X</a>

                                </div>

                            </div>
                        </div>
    <?php
        
    }
        
    }
    
    
    //checkout button
    if(isset($_SESSION["items"])){
        
        ?>

                              <div class="cartproductcontainer">
                               <div class="row bot-buffer cartproduct">

                                <div class="col-sm-3">
                                    
                                    
                                </div>
                                
                                <div class="col-sm-3">
                                    
                                    <h2><?= $row['price']; ?></h2>
                                    
                                </div>
                                
                                <div class="col-sm-2">
                                    
                                    <h2>Total</h2>

                                </div>
                                
                                <div class="col-sm-2">
                                    
                                    <h2><?= $totalprice ?> kr,-</h2>

                                </div>
                                <div class="col-sm-2">
                                    
                                    <a href="checkout.php" class="btn btn-default">Videre til kassen</a>

                                </div>

                            </div>
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