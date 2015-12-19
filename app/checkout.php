<?php 
session_start();

//only access to page if shoppingcart isn't empty
if(isset($_SESSION["items"])){
$sessionids = '';


//checks for post form submission
if($_SERVER['REQUEST_METHOD'] == 'POST'){
//filter userinputs
    $name = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING) or die('Error: fornavn er ikke gyldigt');
    $lastname = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING) or die('Error: efternavn er ikke gyldigt');
    $address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING) or die('Error: adressen er ikke gyldig');
    $zipcode = filter_input(INPUT_POST, 'zipcode', FILTER_VALIDATE_INT) or die('Error: post nr er ikke gyldigt');
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL) or die('Error: email er ikke gyldig');
    $orderid;

    //checks radiobuttons
    if($_POST['sent'] == 'yessent'){
        
        $deliveryaddress = 'null';
        
    }else if($_POST['sent'] == 'nosent') {
        
        $deliveryaddress = $_POST['location'];
        
    }else {
        die('Error: der er ikke blevet valgt en mulighed for forsendelse');
    }
    
    require_once("php/config.php");
    
    //inserts order query
    $sql = "INSERT INTO `orders`(`status`, `deliveryaddresses_iddeliveryaddresses`) VALUES ('ikke sendt', $deliveryaddress);";

    //prepared statement
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    
    //gets id from the order which was just created
    $sqlorderid = "SELECT idorders FROM orders order by idorders desc LIMIT 1;";
    $result = $conn->query($sqlorderid);

    //saves order id
    while($row = $result->fetch_array()){
    
        $orderid = $row['idorders'];
        
    }
    
    //insert contactinformation by using order id
    $sql = "INSERT INTO `billinginformation`(`name`, `lastname`, `address`, `mail`, `zipcodes_idzipcodes`, `orders_idorders`) VALUES (?,?,?,?,?,?)";

    //prepared statement
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ssssii', $name, $lastname, $address, $email, $zipcode, $orderid);
    $stmt->execute();
    
    //inserts qty of products related to the order
    foreach($_SESSION["items"] as $key => $val)
    { 
  
    $sqlorderbrigde = "INSERT INTO `orders_has_products`(`orders_idorders`, `products_idproducts`, `quantity`) VALUES ($orderid,$key,$val);";
    $stmtorderbrigde = $conn->prepare($sqlorderbrigde);
    $stmtorderbrigde->execute();
    
//    echo $val . ' af produkt ' . $key . ' -- ';
    
    }

    //SEND MAIL
    //saves item ids in variable
     foreach($_SESSION["items"] as $key => $val)
    { 
        $sessionids .= $key . ',';
    }
        
    //trims variable for SQL query
    $sessionids = rtrim($sessionids, ',');
        
    require_once("php/config.php");
    
    //SQL query
    $sql = "select * from products where idproducts in ($sessionids)";

    //connects to database
    $result = $conn->query($sql);

    $totalprice = 0;
    //creates table for email
    $itemlist = '<table><thead align="left"><tr><th>Produkt</th><th>Antal</th><th>Samlet pris</th></tr></thead><tbody>';
    
    //gets data from database and puts in a table
    while($row = $result->fetch_array()){
    
    $productid = $row['idproducts'];
    $productqty = $_SESSION["items"][$productid];
    $totalproductprice = $row['price']*$productqty;
    $totalprice += $totalproductprice;
    
        $itemlist .= '<tr>';
        $itemlist .= '<td width="250">';
        $itemlist .= $row['productname'];
        $itemlist .= '</td>';
        
        $itemlist .= '<td width="250">';
        $itemlist .= $productqty;
        $itemlist .= ' stk.';
        $itemlist .= '</td>';
        
        $itemlist .= '<td>';
        $itemlist .= $totalproductprice;
        $itemlist .= ' kr,-';
        $itemlist .= '</td>';
        $itemlist .= '</tr>';
                                                   
}
        $itemlist .= '<tr><td></td><td></td>';
        $itemlist .= '<td style="font-weight:bold;">';
        $itemlist .= $totalprice;
        $itemlist .= ' kr,-';
        $itemlist .= '</td>';
        $itemlist .= '</tr></tbody></table>'; 
//                                            echo $itemlist;

//inserts table in message
$msg = <<<EOD
<h1>Ordrebekræftelse</h1><br>
<h2>Ordre nummer: $orderid</h2>
<br>
<br>
$itemlist
<br>
<br>
<br>
<br>
<br>
Tak fordi du handlede hos
<br>
<br>
Venlig hilsen<br>
Tingfinderen.dk

EOD;

    //sends email by using php mail function
    mail($email, "Tingfinderen.dk", $msg, "MIME-version: 1.0\nContent-type: text/html; charset= UTF-8");
    
    //RESET SHOPPINGCART and deleting all sessions
    $_SESSION = array();

    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }
    
    //page redirect
    header("Location: succespage.php");   
    
}

?>
<!DOCTYPE html>
<html lang="da">

    <head>

        <!-- title -->
        <title>Tingfinderen.dk | Betaling</title>

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

                                <li><a href="cart.php" class="textdecoration">Indkøbsvogn</a></li>
                                <li class="active">Kasse</li>
                                <li><a class="textdecoration">Betaling</a></li>
                                <li><a class="textdecoration">Kvittering</a></li>

                            </ol>

                        </div>
                    </div>

                    <!--    Payment header title -->
                    <div class="row">

                        <div class="col-sm-12">

                            <h1>Betaling</h1>

                        </div>

                    </div>
                    
<!--                    contactinformation form-->
                    <div class="row">
                        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post" class="contactform" name="checkoutform" onsubmit="return validatecheckoutform()">

                            <div class="col-sm-6">

                                <input type="text" name="firstname" placeholder="Navn" maxlength="100" aria-label="fornavn" required>
                                <input type="text" name="lastname" placeholder="Efternavn" maxlength="100" aria-label="efternavn" required>
                                <input type="text" name="address" placeholder="Adresse" maxlength="45" aria-label="adresse" required>
                                <input type="text" name="zipcode" placeholder="Post Nr." maxlength="4" aria-label="postnr" required>
                                <input type="email" name="email" placeholder="Email" maxlength="100" aria-label="email" required>

                                <p>Ønskes tilsendt til egen adresse?</p>
                                <label for="yessent">
                                    <input type="radio" name="sent" id="yessent" value="yessent" checked required>Ja</label>
                                <label for="nosent">
                                    <input type="radio" name="sent" id="nosent" value="nosent" required>Nej</label>

                               
                                <select id="deliveryaddress" name="location">
                                    <?php 
                                
                                require_once("php/config.php");
    
                                //SQL query for pickupaddresses
                                $sqloptionlist = "select * from pickupaddresses;";

                                //connects to db
                                $result = $conn->query($sqloptionlist);

                                //get from db
                                while($row = $result->fetch_array()){

                                ?>
                                
            <option label="<?= $row['addressname']; ?>" value="<?= $row['iddeliveryaddresses']; ?>"><?= $row['addressname']; ?></option>
                                
                                <?php

                                }
                                
                                ?>
                                </select>

                                <p>(NB: Bemærk leveringsadresse og faktureringsaddresse er den samme!)</p>

                            </div>

<!--                               recipetable-->
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
                                
                                
    //prints out recipe if cart isn't empty                
    if(isset($_SESSION["items"])){
   
    //saves item id's in variable
    foreach($_SESSION["items"] as $key => $val)
    { 
        $sessionids .= $key . ',';
    
    }
        
    //trims item ids for SQL
    $sessionids = rtrim($sessionids, ',');
        
    require_once("php/config.php");
    
    //SQL query for selecting products in cart
    $sql = "select * from products where idproducts in ($sessionids)";

    //connects to db
    $result = $conn->query($sql);

    $totalprice = 0;
    //gets data from db and prints out
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
        
    }
                             
    ?>
                                       <tr class="lastcell">
                                           <td></td>
                                           <td></td>
                                           <td class="bold"><?= $totalprice; ?> kr,-</td>
                                       </tr>
                                        </tbody>
                                    </table>
                                </div>
                                </div>
                                
<!--                                paybutton-->
                                <div class="col-sm-12">

                                    <button type="submit" class="btn graybutton sharp" id="submitcheckout">Betal</button>

                                </div>
                        </form>

                        </div>

                </main>


                </div>
                
                <?php 
                //footer
                require_once("php/footer.php");

                ?>

<!--   JavaScript validation  -->
<script src="js/script.js"></script>
   
</body>

</html>
<?php
}else {
    header("Location: index.php");
}
?>