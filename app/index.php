<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="da">

    <head>

        <!-- title -->
        <title>Tingfinderen.dk | Velkommen til Tingfinderen.dk</title>

        <!-- Pane Description -->
        <meta name="description" content="På Tingfinderen.dk kan du købe spændende og interessante produkter, der har en historie bag sig.">

        <?php

    //head info
    require_once("php/head.php");

    ?>
           
            

    </head>

    <body>

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
       
        <?php

    //header
    require_once("php/header.php");

    ?>


            <div class="jumbotron">


                <div class="text-center">
                    <h1>Tingfinderen</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tempor ex nec leo lobortis mattis. Maecenas ac interdum dui, at fermentum leo. Ut quis maximus enim.</p>
                    <a href="shop.php" class="btn graybutton sharp">Køb</a>
                    <a href="about.php" class="btn graybutton sharp">Sælg</a>
                </div>


            </div>

            <div class="container">

                <?php 
    
//    require_once("php/carticon.php");
            
    ?>


                    <!-- main -->
                    <main>

                        <div class="row bot-buffer">

                            <div class="col-sm-3">

                                <img src="images/questiongem.svg" alt="1.step in proces" class="processicon" />
                                <h2 class="text-center">Finder historie</h2>
                                <p class="text-center">Hos Tingfinderen køber vi gamle ting og sager som enten er blevet smidt ud eller ikke længer har nogle personlig værdi for ejeren igennem kommuner eller privatpersoner.</p>

                            </div>

                            <div class="col-sm-3">

                                <img src="images/cleangem.svg" alt="2.step in proces" class="processicon" />
                                <h2 class="text-center">Restaurerer</h2>
                                <p class="text-center">Hos Tingfinderen tager vi de gamle ting og giver dem en ny chance ved at restaurere dem.</p>

                            </div>

                            <div class="col-sm-3">

                                <img src="images/givegem.svg" alt="3.step in proces" class="processicon" />
                                <h2 class="text-center">Sælger</h2>
                                <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tempor ex nec leo lobortis mattis. Maecenas ac interdum dui, at fermentum leo. Ut quis maximus enim. </p>

                            </div>

                            <div class="col-sm-3">

                                <img src="images/shinygem.svg" alt="4.step in proces" class="processicon" />
                                <h2 class="text-center">Pynter</h2>
                                <p class="text-center">Med ting fra tingfinderen får dit hjem eller kontor et nyt smart look med ældre ting som er blevet pudset op til en ny og moderne standard.</p>

                            </div>



                        </div>

                        <div class="row diamondrow bot-buffer">

                            <div class="col-xs-12">

                          
                                    
                                                                           <hr style="float:left;">

                                                                            <hr style="float:right;">
                                        <img src="images/diamond.svg" class="diamondimage" alt="diamant">

                                











                            </div>

                        </div>

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

<iframe class="youtubevideo" src="https://www.youtube.com/embed/l12xBNcM_Ho" allowfullscreen></iframe>
                             
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
            <?php 
            //footer
            require_once("php/footer.php");

        ?>
    </body>

    </html>