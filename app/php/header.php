<?php
//active site in navbar
$frontpage = "";
$shop = "";
$about = "";
$sell = "";
$contact = "";


//vælger en id til den aktive side
$currentsite = basename($_SERVER['PHP_SELF'], ".php");
if($currentsite == 'index'){

    $frontpage = 'id="active"';

}else if($currentsite == 'shop'){
    
    $shop = 'id="active"';

}else if($currentsite == 'about'){

    $about = 'id="active"';

}else if($currentsite == 'selltous'){

    $sell = 'id="active"';

}else if($currentsite == 'contact'){

    $contact = 'id="active"';

}



?>


 
         
         
<div class="row">
               
<div class="navbar navbar-inverse navbar-static-top">


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


<li><a href="index.php" <?= $frontpage ?>>Forside</a></li>
<li><a href="shop.php" <?= $shop ?>>Shop</a></li>
<li><a href="about.php" <?= $about ?>>Om os</a></li>
<li><a href="selltous.php" <?= $sell ?>>Sælg til os</a></li>
<li><a href="contact.php" <?= $contact ?>>Kontakt</a></li>

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
          
