<!--Modernizr-->
<!--
  
   <script>
    if (!Modernizr.svg) {
    var imgs = document.getElementsByTagName('img');
    var svgExtension = /.*\.svg$/
    var l = imgs.length;
    for(var i = 0; i < l; i++) {
        if(imgs[i].src.match(svgExtension)) {
            imgs[i].src = imgs[i].src.slice(0, -3) + 'png';
            console.log(imgs[i].src);
        }
    }
}
    </script>
-->
    
    <div id="footer">

    <div class="container">

        <div class="row">

            <!--Contactinformation-->
            <div class="col-sm-3 footerspace">

                <p>Kontakt:
                    <br/>+45 60 15 85 75
                    <br/> kontakt@tingfinderen.dk
                </p>
                <img src="images/payment/visa.png" alt="visa">
                <img src="images/payment/mastercard.png" alt="mastercard">
                <img src="images/payment/discover.png" alt="discover">
                <img src="images/payment/americanexpress.png" alt="americanexpress">
                <img src="images/payment/paypal.png" alt="paypal">

            </div>

            <!--Location-->
            <div class="col-sm-3 footerspace">

                <p>Adresser:
                    <br/> København K, Sdr. Jylland og Odense C.
                    <br/> Danmark
                </p>

            </div>
            <!--Admin login-->
            <div class="col-sm-3 footerspace">

                <a href="admin.php" class="admintext">Admin Login</a>

            </div>

            <!--Social Media-->
            <div class="col-sm-3">

    <p>Find os også på sociale medier</p>
                <a href="https://www.facebook.com/BJCtingfinderen-995619370494820/timeline" target="_blank"><i class="fa fa-facebook-square socialmediaicons"></i></a>
                <a href="https://twitter.com/tingfinderen" target="_blank"><i class="fa fa-twitter-square socialmediaicons"></i></a>
                <a href="https://plus.google.com/communities/108233623519576043625" target="_blank"><i class="fa fa-google-plus-square socialmediaicons"></i></a>
                <a href="https://www.instagram.com/bjctingfinderen/" target="_blank"><i class="fa fa-instagram socialmediaicons"></i></a>
                <a href="https://www.youtube.com/channel/UC0UBSMu4ebnayb1tB02G4PA" target="_blank"><i class="fa fa-youtube-square socialmediaicons"></i></a>

    <!--      Trustpilot-->
           <div><a href="https://dk.trustpilot.com/review/tingfinderen.dk" target="_blank"><img src="images/trustpilot.png" id="trustpilot" alt="trustpilot"></a>
            <img src="images/emearke.png" alt="emaerke" style="width:50px">
            </div>
            </div>

        </div>

    </div>

</div>