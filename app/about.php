<?php 
session_start();
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
    
    <h1>Velkommen til Tingfinderen!</h1>
    <div class="row">
        
        <div class="col-sm-6">
            
            <h2>Sælg til os!</h2>
    <p>Man skal være velkommen til at sende os en besked vedr. køb/salg. Det er muligt at kontakte os hvis i har en ting eller flere ting, som i tror, ville være spændende for os at kigge på, vi ser gerne på jeres ting og sager og vurderer derefter om det er interessant for os. Vi elsker alt specielt med noget historik, crazy af udseende eller industri præget design! Alle emails vil blive besvaret. Skriv en besked til siden eller kontakt os via email - kontakt@tingfinderen.dk. <br>Vi kan også findes på facebook.</p>
          <br>
           <a href="contact.php" class="btn btn-default">Kontakt os her</a>
            
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
