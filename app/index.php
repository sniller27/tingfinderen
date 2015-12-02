<!DOCTYPE html>
<html lang="da">
<head>

<!-- title -->
<title>Tingfinderen.dk</title>
        
<!-- Pane Description -->
<meta name="description" content="Velkommen til Tindfinderen.dk">

<?php

//head info
require_once("php/head.php");

?>

</head>
<body>

<div class="container">
<?php

//header
require_once("php/header.php");

?>









<div class="row">
               
<div class="navbar navbar-default navbar-static-top">


<div class="container">


<div class="navbar-header">
				<a href="index.php"><img src="images/logo.jpg" alt="Tingfinderen logo" id="logo"></a>
				
				<button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
</div>

<div class="collapse navbar-collapse navHeaderCollapse">

<ul class="nav navbar-nav navbar-right verticalalign">


<li><a href="index.php">Forside</a></li>
<li><a href="shop.php">Shop</a></li>

<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">Mere<b class="caret"></b></a>
<ul class="dropdown-menu">

<li><a href="admin.php">Admin login</a></li>

</ul>
</li>

</ul>

</div>


</div>




</div>
               
</div>







<!-- main -->
<main>
    
        <h1>home</h1>
        <div class="row">
            
            <div class="col-sm-4" style="background-color:blue">
                
                hi
                
            </div>  
            <div class="col-sm-4" style="background-color:blue">
                
                hi
                
            </div>  
            <div class="col-sm-4" style="background-color:blue">
                
                hi
                
            </div>
              
        </div>
    
</main>

<?php 
//footer
require_once("php/footer.php");
    
?>
</div>
</body>
</html>
