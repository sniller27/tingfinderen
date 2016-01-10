<?php
 
	require_once("config.php");
 
	$zipcode    = $_GET['zipcode'];
 
	$sql        = "select idzipcodes from zipcodes where idzipcodes like '$zipcode%' order by idzipcodes limit 7;";
 
	$res        = $conn->query($sql);
 
	if(!$res)
		echo mysqli_error($db);
	else
		while( $row = $res->fetch_object() )
			echo "<option value='".$row->idzipcodes."'></option>";
 
?>
