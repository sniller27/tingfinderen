<?php 
session_start();
?>
    <!DOCTYPE html>
    <html lang="da">

    <head>
        <meta charset="UTF-8">
        <title>Untitled Document</title>
        <meta name="Author" content="" />
        <link rel="stylesheet" type="text/css" href="style.css">

        <?php
        require_once('head.php');
        ?>

    </head>

    <body>



        <div class="container">
            <a href="../admin.php">Logud</a>

            <div class="row">

                <div class="col-sm-6">

                    <h1>Ordrer</h1>
                    <table class="table">
                        <tr>
                            <th>Ordre ID</th>
                            <th>Dato</th>
                            <th>Status</th>
                        </tr>

                        <?php

require_once("config.php");
    
    //SQL query
    $sql = "select * from orders";

    //forbinder query til MySQL
    $result = $conn->query($sql);

    //udtrækker fra database
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
                                    <?php 
        
        if($row['status'] == 0){
            
            echo 'ikke sendt';
            
        }else {
            
            echo 'ikke sendt';

            
        }
         ?>
                                </td>

                            </tr>

                            <?php
    
    }

?>


                    </table>

                </div>

            </div>

            <div class="row">

                <div class="col-6-sm">



                </div>

            </div>
        </div>

    </body>

    </html>