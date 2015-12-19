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
          
          <!--        gem with question mark icon-->
           <div class="row">
            <div class="col-sm-2">
                <img src="images/questiongem.svg" alt="1.step in proces" class="processiconabout smallprocessicons" />
            </div>
            <div class="col-sm-10">
                <h2>Finder historie</h2>
                <p>Hos Tingfinderen køber vi gamle ting og sager som enten er blevet smidt ud eller ikke længer har nogle personlig værdi for ejeren igennem kommuner eller privatpersoner.</p>
                <!--            goldline-->
            <hr class="goldhr">
            </div>
            </div>
            
            <!--        cleaning gem icon-->
            <div class="row">
            <div class="col-sm-2">
                <img src="images/cleangem.svg" alt="2.step in proces" class="processiconabout smallprocessicons" />
            </div>
            <div class="col-sm-10">
                <h2>Restaurerer</h2>
                <p>Hos Tingfinderen tager vi de gamle ting og giver dem en ny chance ved at restaurere dem.</p>
                <!--            goldline-->
            <hr class="goldhr">
            </div>
            </div>
            
            
            
            <!--        give gem icon-->
            <div class="row">
            <div class="col-sm-2">
                <img src="images/givegem.svg" alt="3.step in proces" class="processiconabout smallprocessicons" />
            </div>
            <div class="col-sm-10">
                <h2>Sælger</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tempor ex nec leo lobortis mattis. Maecenas ac interdum dui, at fermentum leo. Ut quis maximus enim.</p>
                                <!--            goldline-->
            <hr class="goldhr">
            </div>
            </div>
            
           
            
            <!--        shiny gem icon-->
            <div class="row">
            <div class="col-sm-2">
                <img src="images/shinygem.svg" alt="4.step in proces" class="processiconabout smallprocessicons" />
            </div>
            <div class="col-sm-10">
                <h2>Pynter</h2>
                                <p>Med ting fra tingfinderen får dit hjem eller kontor et nyt smart look med ældre ting som er blevet pudset op til en ny og moderne standard.</p>
                                <!--            goldline-->
            <hr class="goldhr">
            </div>
            </div>
            
        </div>
        
        
<!--        right column-->
        <div class="col-sm-6">
          
           <div class="row">
              
               <div class="col-sm-12 bot-buffer">
                   <h2>Hvem er vi?</h2>
    <p>Tingfinderen er en nyetableret virksomhed i Danmark med fokus på spændende highend genbrug. EST 2015. Vi fokuserer på indkøb af kommunalt affald vi forvandler til guld, antikke spisfindiheder bliver rekonstrueret til det moderne hjem eller helt nye designs bliver skabt komplet fra bunden. Vi henvender os ikke til den enkelte katergori, men breder os gerne ud og kan finde på hvad som helst. Om det er lamper, møbler, heste eller fly, det er ligemeget. Vores team kombinerer deres ekspertise og kreative tankeveje med innovativt håndværk for at leverer de bedste produkter, af allerbedste kvalitet.</p>
                   
               </div>
               
               <div class="col-sm-12 bot-buffer">
                   <h2>Konceptet</h2>
    <p>Tingfinderen er en nyetableret virksomhed i Danmark med fokus på spændende highend genbrug. EST 2015. Vi fokuserer på indkøb af kommunalt affald vi forvandler til guld, antikke spisfindiheder bliver rekonstrueret til det moderne hjem eller helt nye designs bliver skabt komplet fra bunden.</p>
                   
               </div>
               
               <div class="col-sm-12 bot-buffer">
                   <h2 id="sell">Sælg til os!</h2>
    <p>Man skal være velkommen til at sende os en besked vedr. køb/salg. Det er muligt at kontakte os hvis i har en ting eller flere ting, som i tror, ville være spændende for os at kigge på, vi ser gerne på jeres ting og sager og vurderer derefter om det er interessant for os. Vi elsker alt specielt med noget historik, crazy af udseende eller industri præget design! Alle emails vil blive besvaret. Skriv en besked til siden eller kontakt os via email - kontakt@tingfinderen.dk. <br>Vi kan også findes på facebook.</p>
          <br>
           <a href="contact.php" class="btn graybutton sharp">Kontakt os her</a>
                   
               </div>
               
           </div>
            
            
            
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
