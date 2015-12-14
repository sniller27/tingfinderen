<?php 
session_start();

$sent = '';
if(isset($_GET['mailsent'])){
    
    $sent = 'Din besked er blevet sendt';
    
}
?>
<!DOCTYPE html>
<html lang="da">
<head>

<!-- title -->
<title>Tingfinderen.dk</title>
        
<!-- Pane Description -->
<meta name="description" content="Kontakt os hvis du har spørgsmål">

<?php

//head info
require_once("php/head.php");

?>
<style>

    /** Google maps **/
#map_canvas {

    height:400px;
    

}
    
</style>

<!-- Google maps API -->
     <script type="text/javascript"
    src="http://maps.google.com/maps/api/js?sensor=false">
</script>
<script type="text/javascript">
  function initialize() {
    var position = new google.maps.LatLng(55.677517, 12.575853);
    var myOptions = {
      zoom: 16,
    scrollwheel: false,
    navigationControl: false,
    mapTypeControl: false,
    scaleControl: false,
    draggable: false,
      center: position,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(
        document.getElementById("map_canvas"),
        myOptions);
 
    var marker = new google.maps.Marker({
        position: position,
        map: map,
        title:"F.C.Fremtiden"
    });  
 
    var contentString = 'Tingfinderen Aps <br> Knabrostræde 25, KL, 1204 Copenhagen, Denmark';
    var infowindow = new google.maps.InfoWindow({
        content: contentString
    });
 
//    google.maps.event.addListener(marker, 'click', function() {
      infowindow.open(map,marker);
//    });
 
  }
 
</script>

</head>
<!-- initialize Google Maps -->
    <body onload="initialize()">


<?php

//header
require_once("php/header.php");

?>
<div class="container">


<!-- main -->
<main>
           <div class="row">
               <div class="col-sm-12">
                   
                   
                   <h1 style="color:green"><?= $sent ?></h1>
                   <h1>Kontakt</h1>
                   
               </div>
           </div>

       <div class="row">
           
           <div class="col-sm-6 col-md-4 col-lg-3">
               
        <form action="php/sendemail.php" method="post" class="contactform" name="contactform" onsubmit="return validatecontactform()">
            
            <input type="text" placeholder="Navn" name="name" required>
            <input type="email" placeholder="Email" name="mail" required>
            <textarea placeholder="Besked" name="msg" required></textarea>
            <button type="submit" class="btn btn-default">Send</button>
            
        </form>
             
<!--
              <form action="php/sendemail.php" method="post" name="sendmailform" onsubmit="return validatesignupForm()">
                        <label for="sendmail">Email:</label><br>
                        <input type="email" placeholder="Email" id="sendmail" name="mail" required>
                        <br>
                        <label for="title">Titel:</label>
                        <br>
                        <input type="text" placeholder="Titel" id="title" name="title" required>
                        <br>
                        <label for="mailtextarea">Besked:</label>
                        <br>
                        <textarea id="mailtextarea" placeholder="Besked" name="msg" required></textarea>
                        <br>
                        <button type="submit" value="Send" class="donatebutton" name="sendmailsubmit">Send</button>
                    
                    </form>
-->
               
           </div>
           <div class="col-sm-6 col-md-4">
               
                
<p>Send os endelig en besked, hvis du har spørgsmål eller vil vide andet. Vi er klar på tasterne, altid!</p>
               
           </div>
           
           <div class="col-sm-12 col-md-4 col-lg-5">
               
                <!-- Google maps -->
                <div id="map_canvas"></div>
               
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
