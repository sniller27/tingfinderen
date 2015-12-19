<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="da">

    <head>

        <!-- title -->
        <title>Tyskenhavn.dk | Velkommen til Tyskenhavn.dk</title>

        <!-- Pane Description -->
        <meta name="description" content="Her på Tyskenhavns hjemmeside kan du købe kvalitetsvin">

        <!-- Meta tags -->
        <meta charset="utf-8">
        <meta name="author" content="Tingfinderen.dk">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Favicons -->
        <link rel="icon" type="image/png" href="images/tyskenhavn/tyskenhavnfavicon.png">
        <link rel="apple-touch-icon" href="mages/tyskenhavn/tyskenhavnfavicon.png">

        <!-- Bootstrap -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

        <!-- CSS -->
        <link href="css/styles.css" rel="stylesheet">

        <!-- JavaScript -->
        <script src="js/script.js"></script>

        <!-- Google font -->
        <link href='https://fonts.googleapis.com/css?family=Raleway:300,400,500,700,600,900,800' rel='stylesheet' type='text/css'>

        <!--Fontawesome CDN-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    </head>

    <body id="tyskenhavnbody">
       
       <!--   header-->
    <div class="navbar navbar-default navbar-static-top" id="tyskenhavnheader">


        <div class="container">


            <div class="navbar-header">

                <a href="tyskenhavn.php"><img src="images/tyskenhavn/tyskenhavn-logo.svg" alt="Tingfinderen logo" id="tyskenhavnlogo"></a>

                <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse" id="nav-icon4">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <p class="cartamount" id="notification">0</p>
            </div>

            <!--mobile menu-->
            <div class="collapse navbar-collapse navHeaderCollapse">

                <ul class="nav navbar-nav navbar-right verticalalign">


                    <li><a href="#" class="uppercase hvr-underline-from-center tyskenhavnhover">Forside</a></li>
                    <li><a href="#" class="uppercase hvr-underline-from-center tyskenhavnhover">Shop</a></li>
                    <li><a href="#" class="uppercase hvr-underline-from-center tyskenhavnhover">Info</a></li>
                    <li><a href="#" class="uppercase hvr-underline-from-center tyskenhavnhover">Kontakt</a></li>
                    <li><a href="index.php" class="uppercase hvr-underline-from-center tyskenhavnhover">Tingfinderen.dk</a></li>
                    
<!--                    CART IN MENU-->
                    <li><a href="#"><i class="fa fa-shopping-cart carticon"></i><p class="cartamount">0</p></a></li>

                </ul>

            </div>

        </div>

    </div>

    <div class="container">
               
                <div class="row">
                   
<!--                   coverimage-->
                    <div class="col-xs-12">
                           <img src="images/tyskenhavn/coverimage.png" alt="tyskenhavncoverimage" class="tyskenhavncoverimage">
                    </div>
                    
                </div>
                   
                    <!-- main -->
                    <main>

                        <div class="row bot-buffer">

<!--                           wine 1-->
                            <div class="col-sm-3 bot-buffer">

                                <img src="images/tyskenhavn/vin-flaske.svg" alt="1.step in proces" class="processicon" />
                                <h2 class="text-center">Tuckerbox Primotivo</h2>
                                <p class="text-center">199,95 kr,-</p>

                            </div>

<!--                           wine2-->
                            <div class="col-sm-3 bot-buffer">

                                <img src="images/tyskenhavn/vin-flaske.svg" alt="2.step in proces" class="processicon" />
                                <h2 class="text-center">Chateau Fombrauge</h2>
                                <p class="text-center">249,95 kr,-</p>

                            </div>

<!--                           wine 3-->
                            <div class="col-sm-3 bot-buffer">

                                <img src="images/tyskenhavn/vin-flaske.svg" alt="3.step in proces" class="processicon" />
                                <h2 class="text-center">Piccini Memoro Rosso</h2>
                                <p class="text-center">199,95 kr,-</p>

                            </div>

<!--                           wine 4-->
                            <div class="col-sm-3 bot-buffer">

                                <img src="images/tyskenhavn/vin-flaske.svg" alt="4.step in proces" class="processicon" />
                                <h2 class="text-center">Piccini Memoro Bianco</h2>
                                <p class="text-center">299,95 kr,-</p>

                            </div>

                        </div>
                                      
                            <hr>
                            
                        <div class="row bot-buffer">

<!--                           About Tyskenhavn -->
                            <div class="col-sm-12 bot-buffer top-buffer">
                            
    <h2>Om butikken</h2>
    <p>Lad dig forføre af de liflige dufte af gode vine, specialøl og gourmetvarer, der møder dig, når du træder ned i vores hyggelige kælder. Her finder du foruden butikken ”Tyskenhavn og Tingfinderen” også vores vinbar, og det er her fra duftene kommer. Vi ved, hvor svært det er at vente på at smage på vinen, specialøllen eller gourmetvaren, du lige har købt i Tyskenhavn og Tingfinderen. Derfor kan du straks nyde et glas eller to i kombination med f.eks. udsøgte oliven, friskbagt brød, oste og saltede mandler i vores hyggeligt indrettede vinbar. Du bliver positivt overrasket over priserne, og føler dig hensat til gamle dage, inden alt blev så dyrt. Vi sælger nemlig vine til grænsepriser – også i vinbaren. Vi sælger også bordet du sidder ved, stolen du sidder på, lampen over bordet, glasset du drikker af og tallerkenen med de saltede mandler. ALT er nemlig til salg, da vinbaren er en del af butikkens vareudvalg. Det betyder ikke, at du skal være nervøs for at miste dit bord midt i hyggestunden – vi venter til du er færdig.</p>
                             
                               
                            
                                </div>

                        </div>

                    </main>

            </div>
            
<!--        footer-->
<div id="footer" class="tyskenhavnfooter">
   
    <div class="container">
       
        <div class="row">
        
<!--           Contactinfo-->
            <div class="col-sm-3 footerspace">

                <p>Kontakt:
                    <br/>+45 21 33 32 09
                    <br/> kontakt@tyskenhavn.dk
                </p>

            </div>
            
<!--            Location-->
            <div class="col-sm-3 footerspace">

                <p>Adresse:<br>
                Tyskenhavn ApS<br>
                Knabrostræde 25 kl.<br>
                1210 København K<br>
                Danmark
                </p>

            </div>
            <div class="col-sm-3 footerspace">


            </div>
            
<!--            Social Media-->
            <div class="col-sm-3">
            
                <p>Find os også på sociale medier</p>
                <a href="#"><i class="fa fa-facebook-square tyskenhavnsocialmedia socialmediaicons"></i></a>
                <a href="#"><i class="fa fa-twitter-square tyskenhavnsocialmedia socialmediaicons"></i></a>
                <a href="#"><i class="fa fa-google-plus-square tyskenhavnsocialmedia socialmediaicons"></i></a>
                <a href="#"><i class="fa fa-instagram tyskenhavnsocialmedia socialmediaicons"></i></a>
                <a href="#"><i class="fa fa-youtube-square tyskenhavnsocialmedia socialmediaicons"></i></a>

           <a href="#"><img src="images/trustpilot.png" id="trustpilot" alt="trustpilot"></a>
           
            </div>

        </div>

    </div>
    
</div>
    
    </body>

</html>