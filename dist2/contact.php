<?php 
session_start();

//feedback if mail is sent
$sent = '';
if(isset($_GET['mailsent'])){
    
    $sent = '<h1 class="usersucces">Din besked er blevet sendt</h1>';
    
}
?>
<!DOCTYPE html>
<html lang="da">
<head>

<!-- title -->
<title>Tingfinderen.dk | Kontakt</title>
        
<!-- Pane Description -->
<meta name="description" content="Kontakt os hvis du har spørgsmål">

<?php

//head info
require_once("php/head.php");

?>

<!-- Google maps API -->
<script type="text/javascript"
    src="http://maps.google.com/maps/api/js">
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
<!--          headertext-->
           <div class="row">
               <div class="col-sm-12">
                   
                   
                   <?= $sent ?>
                   <h1>Kontakt</h1>
                   
               </div>
           </div>

       <div class="row">
           
<!--           text and contactform-->
           <div class="col-sm-6 col-md-6 col-lg-7 contactpagebottombuffer">
               
               <p>Send os endelig en besked, hvis du har spørgsmål eller vil vide andet. Vi er klar på tasterne, altid!</p>
               
<!--               form-->
        <form action="php/sendemail.php" method="post" class="contactform" name="contactform" id="contactform">
            
            <input type="text" placeholder="Navn" name="name" aria-label="navn" required>
            <input type="email" placeholder="Email" name="mail" aria-label="email" required>
            <textarea placeholder="Besked" name="msg" aria-label="besked" required></textarea>
            <button type="submit" class="btn graybutton sharp">Send</button>
            
        </form>
            
           </div>
           
<!--           Google maps-->
           <div class="col-sm-6 col-md-6 col-lg-5">
               
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
