<?php 
session_start();

$sessionids = '';
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

                    <!--             buying process -->
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
                        <form action="#" method="post" class="contactform">

                            <div class="col-sm-6">

                                <input type="text" placeholder="Navn" name="firstname" required>
                                <input type="text" placeholder="Efternavn" name="lastname" required>
                                <input type="text" placeholder="Adresse" name="address" required>
                                <input type="text" placeholder="Post Nr." name="zipcode" required>
                                <input type="email" placeholder="Email" name="email" required>

                                <p>Ønskes tilsendt til egen adresse?</p>
                                <label for="yessent">
                                    <input type="radio" name="sent" id="yessent" required>Ja</label>
                                <label for="nosent">
                                    <input type="radio" name="sent" id="nosent" required>Nej</label>

                                <select>
                                    <option value="copenhagen">København</option>
                                    <option value="odense">Odense</option>
                                    <option value="jutland">Sdr. Jylland</option>
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

                                    <button type="submit" class="btn btn-default rightbutton">Betal</button>

                                </div>
                        </form>


                        </div>

                </main>


                </div>
                <?php 
//footer
require_once("php/footer.php");
    
?>

    </body>

    </html>