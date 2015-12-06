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

</head>
<body>
<?php

//header
require_once("php/header.php");

?>
<div class="container">


<!-- main -->
<main>
    
        <h1>Kontakt</h1>
        <form action="#" method="post" class="contactform">
            
            <input type="text" placeholder="Navn" required>
            <input type="email" placeholder="Email" required>
            <textarea placeholder="Besked" required></textarea>
            <button type="submit" class="btn btn-default">Send</button>
            
        </form>
    
</main>

<?php 
//footer
require_once("php/footer.php");
    
?>
</div>
</body>
</html>
