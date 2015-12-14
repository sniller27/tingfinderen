<?php 
session_start();

//$sessionids = '';
//
//
////tjekker om form er blevet submitted
//if($_SERVER['REQUEST_METHOD'] == 'POST'){
//
//    $name = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING) or die('Error: username er ikke gyldigt');
//    $lastname = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING) or die('Error: password er ikke gyldigt');
//    $address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING) or die('Error: password er ikke gyldigt');
//    $zipcode = filter_input(INPUT_POST, 'zipcode', FILTER_VALIDATE_INT) or die('Error: password er ikke gyldigt');
//    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL) or die('Error: password er ikke gyldigt');
//    $orderid;
//
//    require_once("php/config.php");
//    
//    //check radiobuttons
//    if($_POST['sent'] == 'yessent'){
//        
//        $deliveryaddress = 'null';
//        
//    }else if($_POST['sent'] == 'nosent') {
//        
//        $deliveryaddress = $_POST['location'];
//        
//    }
//    echo $deliveryaddress;
//    
//    //insert order
//    $sql = "INSERT INTO `orders`(`status`, `deliveryaddresses_iddeliveryaddresses`) VALUES ('ikke sendt', $deliveryaddress);";
//
//    //prepared statement for produkt info
//    $stmt = $conn->prepare($sql);
//    $stmt->execute();
//    
//    $sqlorderid = "SELECT idorders FROM orders order by idorders desc LIMIT 1;";
//    $result = $conn->query($sqlorderid);
//
//    //udtrækker fra database
//    while($row = $result->fetch_array()){
//    
//        $orderid = $row['idorders'];
//        
//    }
//    
//    //insert contactinformation
//    $sql = "INSERT INTO `billinginformation`(`name`, `lastname`, `address`, `mail`, `zipcodes_idzipcodes`, `orders_idorders`) VALUES (?,?,?,?,?,?)";
//
//    //prepared statement for produkt info
//    $stmt = $conn->prepare($sql);
//    $stmt->bind_param('ssssii', $name, $lastname, $address, $email, $zipcode, $orderid);
//    $stmt->execute();
//    
//    
//    //inserts qty of products to owner
//    foreach($_SESSION["items"] as $key => $val)
//    { 
//  
//    $sqlorderbrigde = "INSERT INTO `orders_has_products`(`orders_idorders`, `products_idproducts`, `quantity`) VALUES ($orderid,$key,$val);";
//    $stmtorderbrigde = $conn->prepare($sqlorderbrigde);
//    $stmtorderbrigde->execute();
//    
////    echo $val . ' af produkt ' . $key . ' -- ';
//    
//    
//    }
//
//    
//    
//    //SEND MAIL
//     foreach($_SESSION["items"] as $key => $val)
//    { 
//        $sessionids .= $key . ',';
//    
//    }
//        
//    //save ids for SQL
//    $sessionids = rtrim($sessionids, ',');
//        
//    require_once("php/config.php");
//    
//    //SQL query
//    $sql = "select * from products where idproducts in ($sessionids)";
//
//    //forbinder query til MySQL
//    $result = $conn->query($sql);
//
//    $totalprice = 0;
//    $itemlist = '<table><thead align="left"><tr><th>Produkt</th><th>Antal</th><th>Samlet pris</th></tr></thead><tbody>';
//    //udtrækker fra database
//    while($row = $result->fetch_array()){
//    
//    $productid = $row['idproducts'];
//    $productqty = $_SESSION["items"][$productid];
//    $totalproductprice = $row['price']*$productqty;
//    $totalprice += $totalproductprice;
//    
//        
//        $itemlist .= '<tr>';
//        $itemlist .= '<td width="250">';
//        $itemlist .= $row['productname'];
//        $itemlist .= '</td>';
//        
//        $itemlist .= '<td width="250">';
//        $itemlist .= $productqty;
//        $itemlist .= ' stk.';
//        $itemlist .= '</td>';
//        
//        $itemlist .= '<td>';
//        $itemlist .= $totalproductprice;
//        $itemlist .= ' kr,-';
//        $itemlist .= '</td>';
//        $itemlist .= '</tr>';
//                                                   
//}
//        $itemlist .= '<tr><td></td><td></td>';
//        $itemlist .= '<td style="font-weight:bold;">';
//        $itemlist .= $totalprice;
//        $itemlist .= ' kr,-';
//        $itemlist .= '</td>';
//        $itemlist .= '</tr></tbody></table>'; 
////                                            echo $itemlist;
//
//
//
//
//
//$msg = <<<EOD
//<h1>Ordrebekræftelse</h1><br>
//<h2>Ordre nummer: $orderid</h2>
//<br>
//<br>
//$itemlist
//<br>
//<br>
//<br>
//<br>
//<br>
//Tak fordi du handlede hos
//<br>
//<br>
//Venlig hilsen<br>
//Tingfinderen.dk
//
//EOD;
////   $usersucces = "Info er sendt til email.";
//            //bruger mail function og sender mail
//    mail($email, "Tingfinderen.dk", $msg, "MIME-version: 1.0\nContent-type: text/html; charset= UTF-8");
//    
//
//    
//    //RESET SHOPPINGCART
//    // Unset all of the session variables.
//    $_SESSION = array();
//
//    // If it's desired to kill the session, also delete the session cookie.
//    // Note: This will destroy the session, and not just the session data!
//    if (ini_get("session.use_cookies")) {
//        $params = session_get_cookie_params();
//        setcookie(session_name(), '', time() - 42000,
//            $params["path"], $params["domain"],
//            $params["secure"], $params["httponly"]
//        );
//    }
//    
//    header("Location: index.php");   
//    
//}

?>
<!DOCTYPE html>
<html lang="da">

    <head>

        <!-- title -->
        <title>Tingfinderen.dk</title>

        <!-- Pane Description -->
        <meta name="description" content="Læs om Tingfinderen koncept og opstand.">

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

                    <!-- buying process -->
                    <div class="row">
                        <div class="col-xs-12">

                            <ol class="breadcrumb top-buffer">

                                <li><a class="textdecoration">Indkøbsvogn</a></li>
                                <li class="active">
                                    Kasse
                                </li>
                                <li><a class="textdecoration">Betaling</a></li>
                                <li><a class="textdecoration">Kvittering</a></li>

                            </ol>

                        </div>
                    </div>

                    <!--    contactinformation-->


                    <div class="row">

                        <div class="col-sm-12">

                            <h1>Betaling</h1>

                        </div>

                    </div>
                    <div class="row">
                        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post" class="contactform" name="checkoutform" onsubmit="return validatecheckoutform()">

                            <div class="col-sm-6">

                                <input type="text" name="firstname" placeholder="Navn" maxlength="100" required>
                                <input type="text" name="lastname" placeholder="Efternavn" maxlength="100" required>
                                <input type="text" name="address" placeholder="Adresse" maxlength="45" required>
                                <input type="text" name="zipcode" placeholder="Post Nr." maxlength="4" required>
                                <input type="email" name="email" placeholder="Email" maxlength="100" required>

                                <p>Ønskes tilsendt til egen adresse?</p>
                                <label for="yessent">
                                    <input type="radio" name="sent" id="yessent" value="yessent" checked required>Ja</label>
                                <label for="nosent">
                                    <input type="radio" name="sent" id="nosent" value="nosent" required>Nej</label>

                               
                                <select id="deliveryaddress" name="location">
                                    <?php 
                                
                                require_once("php/config.php");
    
                            //SQL query
                            $sqloptionlist = "select * from pickupaddresses;";

                            //forbinder query til MySQL
                            $result = $conn->query($sqloptionlist);

                            //udtrækker fra database
                            while($row = $result->fetch_array()){

                            ?>
                                        <option value="<?= $row['iddeliveryaddresses']; ?>"><?= $row['addressname']; ?></option>
                            <?php


                            }
                                
                                ?>
                                </select>

                                <p>(NB: Bemærk leveringsadresse og faktureringsaddresse er den samme!)</p>

                            </div>
                            <div>
                                <div class="col-sm-6">
                                <div class="tablediv">

                                    <table class="table paymentinfo">
                                        <thead>
                                            <tr>
                                                <th class="bold">Produkt</th>
                                                <th class="bold">Antal</th>
                                                <th class="bold">Samlet pris</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                
                                
                                
    if(isset($_SESSION["items"])){
   
    foreach($_SESSION["items"] as $key => $val)
    { 
        $sessionids .= $key . ',';
    
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

                                                    <tr>
                                                        <td>
                                                            <?= $row['productname']; ?>
                                                        </td>
                                                        <td>
                                                            <?= $productqty ?> stk.
                                                        </td>
                                                        <td>
                                                            <?= $totalproductprice ?> kr,-
                                                        </td>
                                                    </tr>


                                                    <?php
        
    }
        
    }else {
        
        $customerfeedback = 'Din indkøbsvogn er tom.';
        echo $customerfeedback;
        
    }
                                
                                
                                
                                ?>
<!--
                                       <tr>
                                           <td>Levering</td>
                                           <td></td>
                                           <td>20 kr,-</td>
                                       </tr>
-->
                                       <tr class="lastcell">
                                           <td></td>
                                           <td></td>
                                           <td class="bold"><?= $totalprice; ?> kr,-</td>
                                       </tr>
                                        </tbody>
                                    </table>
                                </div>
                                </div>
                                <div class="col-sm-12">

                                    <button type="submit" class="btn btn-default rightbutton" id="submitcheckout">Betal</button>

                                </div>
                        </form>


                        </div>

                </main>


                </div>
                <?php 
//footer
require_once("php/footer.php");
    
?>

<!--   JavaScript files  -->
    <script src="js/script.js"></script>
   
   
    </body>

    </html>