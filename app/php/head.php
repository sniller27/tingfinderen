<!-- Meta tags -->
<meta charset="utf-8">
<meta name="author" content="Tingfinderen.dk">
<!--avoid compatability mode in older versions of IE-->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!--detect screen and device-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Favicons -->
<link rel="icon" type="image/png" href="images/favicon.ico">
<link rel="apple-touch-icon" href="images/logo.jpg">

<!-- Bootstrap -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

<!-- CSS -->
<link href="css/styles.css" rel="stylesheet">

<!-- JavaScript -->
<script src="js/script.js"></script>

<!-- Google font -->
<link href='https://fonts.googleapis.com/css?family=Raleway:300,400,500,700,600,900,800' rel='stylesheet' type='text/css'>

<!--Fontawesome CDN-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

<!--Open Graph Tags-->
<meta property="og:image" content="images/opengraphpicture.jpg" />
<meta property="og:title" content="Køb fedt genbrugsdesign hos Tingfinderen" />

<!--Modernizr-->
<script src="plugins/modernizr/modernizr-2.8.3.min.js"></script>


<!--Modernizr SVG to PNG-->
   <script>
       $(document).ready(function(){
 
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
           
});
    
    </script>