<?php
session_start();

//customerfeedback
$feedback = '';



?>
<!DOCTYPE html>
<html lang="da">

    <head>

        <!-- title -->
        <title>Tingfinderen.dk | Produktside</title>

        <!-- Pane Description -->
        <meta name="description" content="Velkommen til Tindfinderen.dk">

        <?php

        //head info
        require_once("php/head.php");

        ?>
            
        <!--Colorbox links-->
        <link rel="stylesheet" href="plugins/colorbox/colorbox.css" />
        <script src="plugins/colorbox/jquery-1.11.1.js"></script>
        <script src="plugins/colorbox/jquery.colorbox.js"></script>
        <script src="plugins/colorbox/colorbox.js"></script>

    </head>

    <body>
       
        <?php

        //header
        require_once("php/header.php");

        ?>
            <div class="container">

                <div class="row">

                    <!-- main -->
                    <main>

                        <?php 
    //checks if a get parameter is set
    if(isset($_GET['productid'])){
        
            $productid = $_GET['productid'];
        
    }
    
    require_once("php/config.php");
                        
    //selects information about product
    // $sql = "select productname, productdescription, price, mainimage  from products where idproducts = ? limit 1";    
    $sql = "select productname, productdescription, price, mainimage  from products where idproducts = $productid limit 1";    
    $result = $conn->query($sql);
    //prepared statement for productinfo
    // $stmt = $conn->prepare($sql);
    // $stmt->bind_param('i', $productid);
    // $stmt->bind_result($pname, $pdesc, $price, $pimage);
    // $stmt->execute();
    
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
        echo "<img src=" . $row["mainimage"] . ">";
    }
    } else {
        echo "0 results";
    }

    
    //prepared statement
    // $sqlimg = "select imagesource from productimages where products_idproducts = ?";
    // $stmtimg = $conn->prepare($sqlimg);
    // $stmtimg->bind_param('i', $productid);
    // $stmtimg->bind_result($imgsrc);
    // $stmtimg->store_result();
    // $stmtimg->execute();

    ?>
                            </div>

                    </main>

                </div>

            </div>

        <?php 
        //footer
        require_once("php/footer.php");

        ?>
    </body>

</html>