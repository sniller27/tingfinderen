<?php 
session_start();

//hashing med salt, cost og bcrypt algoritme
//    $options = [
//    'cost' => 10,
//    ];
//    // Get the password from post
//    $passwordFromPost = 'admin';
//
//    $hash = password_hash($passwordFromPost, PASSWORD_BCRYPT, $options);     //bruger default Bcrypt algoritmen
//    echo $hash;
$userresponse = '';

if(isset($_POST['usernamelogin']) && isset($_POST['passwordlogin'])){

    $usernamelogin = filter_input(INPUT_POST, 'usernamelogin', FILTER_SANITIZE_STRING) or die('Error: username er ikke gyldigt');
    $passwordlogin = filter_input(INPUT_POST, 'passwordlogin', FILTER_SANITIZE_STRING) or die('Error: password er ikke gyldigt');

require_once("php/config.php");

// Password should NOT be storred as clear text in the DB.
// Use: http://php.net/manual/en/function.password-hash.php
$sql = 'select idadmin, password from admin where username=?';
$stmt = $conn->prepare($sql);
$stmt->bind_param('s', $usernamelogin);
$stmt->bind_result($uidfromthedb, $upass);
$stmt->execute();

if($stmt->fetch() == 1){
        
        //$pasquery = 'SELECT id from user where password = ? LIMIT 1';
      //  echo $uidfromthedb;
    //    echo $upassfromthedb;
        
        if(password_verify($passwordlogin, $upass)){
                
            $_SESSION['uid'] = $uidfromthedb;
//            echo 'session startet';
            header("Location: php/adminview.php");

            }else{
                
                $userresponse = 'Forkert brugernavn og password';
                
            }

    }else {
    
    $userresponse = 'Forkert brugernavn og password';
    
}

}

?>
<!DOCTYPE html>
<html lang="">
<head>

    <title>Tingfinderen.dk | Admin login</title>

<?php 

    require_once('php/head.php');
    
?>

</head>
<body>
<a href="index.php" class="admintext">Tilbage til forside</a>

<div class="adminlogindiv">

<form action="<?= $_SERVER['PHP_SELF']; ?>" method="post" name="adminloginform" onsubmit="return validateadminloginform()">
<img src="images/logo.svg" alt="tingfinderen logo" />
<input type="text" placeholder="Brugernavn" aria-label="Brugernavn" name="usernamelogin" required>
<input type="text" placeholder="Password" aria-label="Password" name="passwordlogin" required>
<button type="submit" class="btn graybutton sharp">Log ind</button>
<p class="userwarning"><?= $userresponse ?></p>
</form>
</div>

</body>
</html>
