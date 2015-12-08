<?php 

if(isset($_GET['id'])){
    
    $id = $_GET['id'];

//    opretter en session med produktet
//    $_SESSION[$id] = 1;
//    $_SESSION['names'][] = $name;
    
class Product {
            // Creating some properties (variables tied to an object)
            public $idproduct;
            public $qty;
            
            // Assigning the values
            public function __construct($idp,$qty) {
              $this->id = $idp;
              $this->qty = $qty;
            }
            
//            // Creating a method (function tied to an object)
//            public function greet() {
//              return "Hello, my name is " . $this->firstname . " " . $this->lastname . ". Nice to meet you! :-)";
//            }
}
    
    
    $newproduct = new Product(1,2);
    
//array_push($_SESSION['names'],$id);
//    $_SESSION['vogn'];
//    array_push($_SESSION['vogn'],$newproduct);
//    
//    echo $_SESSION['vogn'][0];
//    array_push($_SESSION['vogn'],{2,1});
//    array_push($_SESSION['vogn'],{3,1});
//    
    
//    foreach($_SESSION["vogn"] as $key => $val)
//    { 
//        
//        
//        
//        
//        
//        
//        
//        echo $key. ": ".$val. "<br>";
//        echo '<a href="cart.php" class="btn btn-default">Fjern produkt</a><br>';
//    }
//    
//    if(isset($_SESSION['vogn'][$id])){
//        
//        $_SESSION['vogn'][$id] += 1;
//        
//    }else{
////        $_SESSION['vogn'][$id] = 1;
//        array_push($_SESSION['vogn'],{$id,1});
//    }
////    $_SESSION['vogn'][$id+1] = 'vov';
    
    
    
    
}



?>


<!DOCTYPE html>
<html lang="da" class="no-js">
<head>

<!-- title -->
<title>Tingfinderen.dk</title>
        
<!-- Pane Description -->
<meta name="description" content="Her kan se udvalget alle vores flotte produkter">

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








<!--PLUGINGRID-->
<div class="container">

<!--<div class="cart2"><a href="cart.php"><i class="fa fa-shopping-cart" id="cart2icon"></i><p class="cartamount">0</p></a></div>-->
    
		<div class="content">
			<div class="grid">
			
			    <?php 
    
    require_once("php/config.php");
    
    //SQL query
    $sql = "select * from products";

    //forbinder query til MySQL
    $result = $conn->query($sql);

    //udtrækker fra database
    while($row = $result->fetch_array()){

    ?>
    
<!--
    
    <div class="grid__item" data-size="1280x857">
					<a href="<?= $row['mainimage']; ?>" class="img-wrap"><img src="<?= $row['mainimage']; ?>" alt="img06" />
						<div class="description description--grid">
							<h3><?= $row['productname']; ?></h3>
							<p><?= $row['productdescription']; ?></p>
							<div class="details">
								<ul>
-->
									<!-- <li><i class="icon icon-camera"></i><span></span></li>
									<li><i class="icon icon-focal_length"></i><span>22.5mm</span></li>
									<li><i class="icon icon-aperture"></i><span>&fnof;/5.6</span></li>
									<li><i class="icon icon-exposure_time"></i><span>1/1000</span></li> -->
<!--									<li><i class="fa fa-money" style="font-size:20px;"></i><span><?= $row['price']; ?> kr</span></li>-->
<!--
									<li><h2><?= $row['price']; ?> kr</h2></li>
									<br>
									<a href="shop.php?id=<?= $row['idproducts']; ?>" class="btn btn-default">Læg i kurv</a>
								</ul>
							</div>
						</div>
					</a>
-->
				</div>
    
    
    <?php
    }
    
    ?>
			
			</div>
			
			<!-- /grid close modal -->
<!--
			<div class="preview">
				<button class="action action--close"><i class="fa fa-times"></i><span class="text-hidden">Close</span></button>
				<div class="description description--preview"></div>
			</div>
-->
			
		</div>
		
		
<?php 
//footer
//require_once("php/footer.php");
    
?>

	</div>








<!--ORIGINAL GRID-->
<div class="container">
  
<main>
    
    <div class="row">
        <div class="col-xs-12 product"><h1>Produkter</h1></div>
    
    
    <?php 
    
    require_once("php/config.php");
    
    //SQL query
    $sql = "select * from products";

    //forbinder query til MySQL
    $result = $conn->query($sql);

    //udtrækker fra database
    while($row = $result->fetch_array()){

    ?>
    
    
    <div class="col-xs-6 col-sm-3 product productsize">
       
        <a href="showproduct.php?productid=<?= $row['idproducts']; ?>">
        <p class="textoverlay"><?= $row['productname']; ?></p>
        <img src="<?= $row['mainimage']; ?>" alt="" />
        </a>
        
    </div>
    
    
    <?php
    }
    
    
    ?>
    </div>
</main>


</div>

<?php 
//footer
require_once("php/footer.php");
    
?>

<!-- gridplugin -->
<!--
	<script>
		(function() {
			var support = { transitions: Modernizr.csstransitions },
				// transition end event name
				transEndEventNames = { 'WebkitTransition': 'webkitTransitionEnd', 'MozTransition': 'transitionend', 'OTransition': 'oTransitionEnd', 'msTransition': 'MSTransitionEnd', 'transition': 'transitionend' },
				transEndEventName = transEndEventNames[ Modernizr.prefixed( 'transition' ) ],
				onEndTransition = function( el, callback ) {
					var onEndCallbackFn = function( ev ) {
						if( support.transitions ) {
							if( ev.target != this ) return;
							this.removeEventListener( transEndEventName, onEndCallbackFn );
						}
						if( callback && typeof callback === 'function' ) { callback.call(this); }
					};
					if( support.transitions ) {
						el.addEventListener( transEndEventName, onEndCallbackFn );
					}
					else {
						onEndCallbackFn();
					}
				};

			new GridFx(document.querySelector('.grid'), {
				imgPosition : {
					x : -0.5,
					y : 1
				},
				onOpenItem : function(instance, item) {
					instance.items.forEach(function(el) {
						if(item != el) {
							var delay = Math.floor(Math.random() * 50);
							el.style.WebkitTransition = 'opacity .5s ' + delay + 'ms cubic-bezier(.7,0,.3,1), -webkit-transform .5s ' + delay + 'ms cubic-bezier(.7,0,.3,1)';
							el.style.transition = 'opacity .5s ' + delay + 'ms cubic-bezier(.7,0,.3,1), transform .5s ' + delay + 'ms cubic-bezier(.7,0,.3,1)';
							el.style.WebkitTransform = 'scale3d(0.1,0.1,1)';
							el.style.transform = 'scale3d(0.1,0.1,1)';
							el.style.opacity = 0;
						}
					});
				},
				onCloseItem : function(instance, item) {
					instance.items.forEach(function(el) {
						if(item != el) {
							el.style.WebkitTransition = 'opacity .4s, -webkit-transform .4s';
							el.style.transition = 'opacity .4s, transform .4s';
							el.style.WebkitTransform = 'scale3d(1,1,1)';
							el.style.transform = 'scale3d(1,1,1)';
							el.style.opacity = 1;

							onEndTransition(el, function() {
								el.style.transition = 'none';
								el.style.WebkitTransform = 'none';
							});
						}
					});
				}
			});
		})();
	</script>
-->



</body>
</html>
