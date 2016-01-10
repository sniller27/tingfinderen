<?php 

define("HOSTNAME","localhost");
define("MYSQLUSER","root");
define("MYSQLPASS", "");
define("MYSQLDB", "somethi1_tingfinderdb");

$conn = new mysqli(HOSTNAME, MYSQLUSER, MYSQLPASS, MYSQLDB);

    if($conn->connect_error){

        die('Der er problemer med at connecte til databasen.' . $conn->errno . ' ' . $conn->connect_error);

    }
?>