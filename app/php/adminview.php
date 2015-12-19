<?php 
session_start();

//checks if logged in og redirects
if(isset($_SESSION['uid'])){
?>
<!DOCTYPE html>
<html lang="da">

    <head>
       
        <title>Adminpanel</title>

        <?php
        require_once('head.php');
        ?>

    </head>

    <body>

        <div class="container">
           
<!--           logout-->
            <a href="logout.php">Log ud</a>

            <div class="row">

                <div class="col-sm-12 table-responsive">

<!--                   header title-->
                    <h1>Ordrer</h1>
                    
<!--                    table-->
                    <table class="table">
                        <tr>
                            <th>Ordre ID</th>
                            <th>Oprettet dato</th>
                            <th>Status</th>
                            <th>Produkt nr.</th>
                            <th>Produktnavn</th>
                            <th>Antal</th>
                            <th>Leveringsadresse</th>
                        </tr>

<?php
//get data from db
    
require_once("config.php");
    
    //SQL query selects information related to order
    $sql = "select idorders, orders.date, status, idproducts, productname, quantity, addressname, address, zipcodes_idzipcodes, cityname 
from orders 
	LEFT JOIN pickupaddresses 
    ON orders.deliveryaddresses_iddeliveryaddresses=pickupaddresses.iddeliveryaddresses 
	INNER JOIN orders_has_products 
    ON orders.idorders=orders_has_products.orders_idorders
    INNER JOIN products 
    ON orders_has_products.products_idproducts=products.idproducts
    INNER JOIN billinginformation 
    ON billinginformation.orders_idorders=orders.idorders
    INNER JOIN zipcodes 
    ON billinginformation.zipcodes_idzipcodes=zipcodes.idzipcodes order by orders.date asc;";

    //connects to db
    $result = $conn->query($sql);

    //prints out table data with data from db
    while($row = $result->fetch_array()){ 
        
        ?>
                            <tr>
                                <td>
                                    <?= $row['idorders']; ?>
                                </td>
                                <td>
                                    <?= $row['date']; ?>
                                </td>
                                <td>
                                    <?= $row['status']; ?>
                                </td>
                                <td><?= $row['idproducts']; ?></td>
                                <td><?= $row['productname']; ?></td>
                                <td><?= $row['quantity']; ?></td>
                                <td>
                                <?php
                                //checks af buyer has a pickup address
                                if(!$row['addressname']==''){
                                 
                                echo $row['addressname'] . ' (til afhentning)';

                                }else {
             
                                echo $row['address'] . ', ' . $row['zipcodes_idzipcodes'] . ' ' . $row['cityname'];
             
                                } ?></td>

                            </tr>

                            <?php
    
    }

?>

                    </table>

                </div>

            </div>
       
        </div>

    </body>

</html>
<?php 
}else {
    
    header("Location: ../index.php");
    
} ?>