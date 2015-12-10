<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="da">

    <head>

        <!-- title -->
        <title>Tingfinderen.dk</title>

        <!-- Pane Description -->
        <meta name="description" content="Velkommen til Tingfinderen.dk">

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
                    <a class="btn btn-default sharp">Køb</a>
                    <a class="btn btn-info sharp">Sælg</a>
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

                                <img src="images/processcircle.png" alt="proces" class="processicon" />
                                <h2 class="text-center">Overskrift</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tempor ex nec leo lobortis mattis. Maecenas ac interdum dui, at fermentum leo. Ut quis maximus enim. </p>

                            </div>

                            <div class="col-sm-3">

                                <img src="images/processcircle.png" alt="proces" class="processicon" />
                                <h2 class="text-center">Overskrift</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tempor ex nec leo lobortis mattis. Maecenas ac interdum dui, at fermentum leo. Ut quis maximus enim. </p>

                            </div>

                            <div class="col-sm-3">

                                <img src="images/processcircle.png" alt="proces" class="processicon" />
                                <h2 class="text-center">Overskrift</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tempor ex nec leo lobortis mattis. Maecenas ac interdum dui, at fermentum leo. Ut quis maximus enim. </p>

                            </div>

                            <div class="col-sm-3">

                                <img src="images/processcircle.png" alt="proces" class="processicon" />
                                <h2 class="text-center">Overskrift</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tempor ex nec leo lobortis mattis. Maecenas ac interdum dui, at fermentum leo. Ut quis maximus enim. </p>

                            </div>



                        </div>

                        <div class="row diamondrow">

                            <div class="col-xs-12">

                          
                                    
                                                                           <hr class="goldcolor" style="float:left;">

                                                                            <hr class="goldcolor" style="float:right;">
                                        <img src="images/diamond.svg" class="diamondimage" alt="diamant">

                                











                            </div>

                        </div>

                        <div class="row bot-buffer">


                            <div class="col-sm-9 bot-buffer top-buffer">

                                <h2>Om os</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tempor ex nec leo lobortis mattis. Maecenas ac interdum dui, at fermentum leo. Ut quis maximus enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tempor ex nec leo lobortis mattis. Maecenas ac interdum dui, at fermentum leo. Ut quis maximus enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tempor ex nec leo lobortis mattis. Maecenas ac interdum dui, at fermentum leo. Ut quis maximus enim.</p>

                                <!--
                        </div>

                        <div class="col-sm-4">
-->
                                <br>

                                <h2>Konceptet</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tempor ex nec leo lobortis mattis. Maecenas ac interdum dui, at fermentum leo. Ut quis maximus enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tempor ex nec leo lobortis mattis. Maecenas ac interdum dui, at fermentum leo. Ut quis maximus enim.</p>

                            </div>

                            <div class="col-sm-3 top-buffer">

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