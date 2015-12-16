<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="da">
<head>

<!-- title -->
<title>Tingfinderen.dk | Om tingfinderen</title>
        
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
    
    <h1>Velkommen til Tingfinderen!</h1>
    <div class="row">
        
        <div class="col-sm-6">
          
          <!--        icon-->
           <div class="row">
            <div class="col-sm-2">
                <img src="images/questiongem.svg" alt="1.step in proces" class="processiconabout smallprocessicons" />
            </div>
            <div class="col-sm-10">
                <h2>Finder historie</h2>
                <p>Hos Tingfinderen køber vi gamle ting og sager som enten er blevet smidt ud eller ikke længer har nogle personlig værdi for ejeren igennem kommuner eller privatpersoner.</p>
            </div>
            </div>
            
            <hr class="goldhr">
            
            <!--        icon-->
            <div class="row">
            <div class="col-sm-2">
                <img src="images/cleangem.svg" alt="2.step in proces" class="processiconabout smallprocessicons" />
            </div>
            <div class="col-sm-10">
                <h2>Restaurerer</h2>
                <p>Hos Tingfinderen tager vi de gamle ting og giver dem en ny chance ved at restaurere dem.</p>
            </div>
            </div>
            
            <hr class="goldhr">
            
            <!--        icon-->
            <div class="row">
            <div class="col-sm-2">
                <img src="images/givegem.svg" alt="3.step in proces" class="processiconabout smallprocessicons" />
            </div>
            <div class="col-sm-10">
                <h2>Sælger</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tempor ex nec leo lobortis mattis. Maecenas ac interdum dui, at fermentum leo. Ut quis maximus enim.</p>
            </div>
            </div>
            
            <hr class="goldhr">
            
            <!--        icon-->
            <div class="row">
            <div class="col-sm-2">
                <img src="images/shinygem.svg" alt="4.step in proces" class="processiconabout smallprocessicons" />
            </div>
            <div class="col-sm-10">
                <h2>Pynter</h2>
                                <p>Med ting fra tingfinderen får dit hjem eller kontor et nyt smart look med ældre ting som er blevet pudset op til en ny og moderne standard.</p>
            </div>
            </div>
            
        </div>
        
        
        
        <div class="col-sm-6">
            
            <h2>Sælg til os!</h2>
    <p>Man skal være velkommen til at sende os en besked vedr. køb/salg. Det er muligt at kontakte os hvis i har en ting eller flere ting, som i tror, ville være spændende for os at kigge på, vi ser gerne på jeres ting og sager og vurderer derefter om det er interessant for os. Vi elsker alt specielt med noget historik, crazy af udseende eller industri præget design! Alle emails vil blive besvaret. Skriv en besked til siden eller kontakt os via email - kontakt@tingfinderen.dk. <br>Vi kan også findes på facebook.</p>
          <br>
           <a href="contact.php" class="btn graybutton sharp">Kontakt os her</a>
            
        </div>
        
    </div>
    
</main>


</div>
<?php 
//footer
require_once("php/footer.php");
    
?>

</body>
</html>
