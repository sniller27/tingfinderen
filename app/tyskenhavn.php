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

       <!--   facebook feed SDK-->
            <div id="fb-root"></div>
            <script>
                (function (d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id)) return;
                    js = d.createElement(s);
                    js.id = id;
                    js.src = "//connect.facebook.net/da_DK/sdk.js#xfbml=1&version=v2.5";
                    fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));
            </script>
       
       <!--   header-->
    <div class="navbar navbar-default navbar-static-top">


        <div class="container">


            <div class="navbar-header">

                <a href="index.php"><img src="images/tyskenhavn/tyskenhavnlogo.png" alt="Tingfinderen logo" id="logo"></a>

                <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse" id="nav-icon4">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <p class="cartamount" id="notification"><?= $itemcount ?></p>
            </div>

            <!--mobile menu-->
            <div class="collapse navbar-collapse navHeaderCollapse">

                <ul class="nav navbar-nav navbar-right verticalalign">


                    <li><a href="#" class="uppercase hvr-underline-from-center">Forside</a></li>
                    <li><a href="#" class="uppercase hvr-underline-from-center">Shop</a></li>
                    <li><a href="#" class="uppercase hvr-underline-from-center">Info</a></li>
                    <li><a href="#" class="uppercase hvr-underline-from-center">Kontakt</a></li>
                    <li><a href="index.php" class="uppercase hvr-underline-from-center">Tingfinderen.dk</a></li>
                    
<!--                    CART IN MENU-->
                    <li><a href="#"><i class="fa fa-shopping-cart" style="font-size:30px;"></i><p class="cartamount">0</p></a></li>


                

                </ul>

            </div>


        </div>

    </div>


            

            <div class="container">

                <div class="jumbotron jumbotrontyskenhavn">


                <div class="text-center">
<!--
                    <h1>Tyskenhavn</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tempor ex nec leo lobortis mattis. Maecenas ac interdum dui, at fermentum leo. Ut quis maximus enim.</p>
-->
<!--
                    <a href="#" class="btn graybutton sharp">Køb</a>
                    <a href="#" class="btn graybutton sharp">Sælg</a>
-->
                </div>


            </div>


                    <!-- main -->
                    <main>

                        <div class="row bot-buffer">

                            <div class="col-sm-3">

                                <img src="http://tyskenhavn.dk/images/stories/virtuemart/product/tucker.png" alt="1.step in proces" class="processicon" />
                                <h2 class="text-center">Finder historie</h2>
                                <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur porta convallis ultricies. Duis et tortor ullamcorper, aliquet tellus non, rutrum eros.</p>

                            </div>

                            <div class="col-sm-3">

                                <img src="http://tyskenhavn.dk/images/stories/virtuemart/product/tucker.png" alt="2.step in proces" class="processicon" />
                                <h2 class="text-center">Restaurerer</h2>
                                <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur porta convallis ultricies. Duis et tortor ullamcorper, aliquet tellus non, rutrum eros.</p>

                            </div>

                            <div class="col-sm-3">

                                <img src="http://tyskenhavn.dk/images/stories/virtuemart/product/tucker.png" alt="3.step in proces" class="processicon" />
                                <h2 class="text-center">Sælger</h2>
                                <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur porta convallis ultricies. Duis et tortor ullamcorper, aliquet tellus non, rutrum eros.</p>

                            </div>

                            <div class="col-sm-3">

                                <img src="http://tyskenhavn.dk/images/stories/virtuemart/product/tucker.png" alt="4.step in proces" class="processicon" />
                                <h2 class="text-center">Pynter</h2>
                                <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur porta convallis ultricies. Duis et tortor ullamcorper, aliquet tellus non, rutrum eros.</p>

                            </div>



                        </div>                    
<hr>
                        <div class="row bot-buffer">


                           
                            <div class="col-sm-9 bot-buffer top-buffer">
                            
                            <div class="row bot-buffer">
                                <div class="col-sm-12 top-buffer">

<h2>Hvem er vi?</h2>
    <p>Tingfinderen er en nyetableret virksomhed i Danmark med fokus på spændende highend genbrug. EST 2015. Vi fokuserer på indkøb af kommunalt affald vi forvandler til guld, antikke spisfindiheder bliver rekonstrueret til det moderne hjem eller helt nye designs bliver skabt komplet fra bunden. Vi henvender os ikke til den enkelte katergori, men breder os gerne ud og kan finde på hvad som helst. Om det er lamper, møbler, heste eller fly, det er ligemeget. Vores team kombinerer deres ekspertise og kreative tankeveje med innovativt håndværk for at leverer de bedste produkter, af allerbedste kvalitet.</p>
                             
                             </div> 
                               </div>
                               
                            <div class="row">
                            
                            <div class="col-sm-6 bot-buffer">

<h2>Konceptet</h2>
    <p>Tingfinderen er en nyetableret virksomhed i Danmark med fokus på spændende highend genbrug. EST 2015. Vi fokuserer på indkøb af kommunalt affald vi forvandler til guld, antikke spisfindiheder bliver rekonstrueret til det moderne hjem eller helt nye designs bliver skabt komplet fra bunden.</p>
                             
                             </div>
                             
                             <div class="col-sm-6 bot-buffer">

                             
                             </div>
                              
                               </div>
                               
                               
                               
                                </div>

<!--                           facebook feed-->
                            <div class="col-sm-3 facebookfeedbuffer">

                                <div class="fb-page" data-href="https://www.facebook.com/BJCtingfinderen-995619370494820/timeline" data-tabs="timeline" data-width="360" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div>

                            </div>

                        </div>


                    </main>


            </div>
            
<!--        footer-->
       
    <div id="footer">
<div class="container">
    <div class="row">

        <div class="col-sm-3 footerspace">
           
            <p>Kontakt:
                <br/>+45 60 15 85 75
                <br/> kontakt@tingfinderen.dk
            </p>

        </div>
        <div class="col-sm-3 footerspace">

            <p>Adresser:
                <br/> København K, Sdr. Jylland og Odense C.
                <br/> Danmark
            </p>

        </div>
        <div class="col-sm-3 footerspace">


        </div>
        <div class="col-sm-3">
<p>Find os også på sociale medier</p>
            <a href="#"><i class="fa fa-facebook-square" style="font-size:48px;"></i></a>
            <a href="#"><i class="fa fa-twitter-square" style="font-size:48px;"></i></a>
            <a href="#"><i class="fa fa-google-plus-square" style="font-size:48px;"></i></a>
            <a href="#"><i class="fa fa-instagram" style="font-size:48px;"></i></a>
            <a href="#"><i class="fa fa-youtube-square" style="font-size:48px;"></i></a>

       <a href="#"><img src="images/trustpilot.png" id="trustpilot" alt="trustpilot"></a>
        </div>

    </div>

</div>
</div>
        
        
        
    </body>

    </html>