////old way. function call
//function validateadminloginform() {
//    
//    var username = document.forms["adminloginform"]["usernamelogin"].value;
//    var password = document.forms["adminloginform"]["passwordlogin"].value;
//    
//    //tjekker om brugernavn er angivet
//    if (username == "" || username.length>100) {
//        alert("Du skal angive brugernavn (max 100 karakterer)");
//        return false;
//        
//    //tjekker om password er angivet
//    }else if(password == "" || lastname.length>200){
//       
//        alert("Du skal angive kodeord (max 200 karakterer)");
//        return false;
//    
//    }
//
//}

//new way. external submit
$(document).ready(function(){
    $("#adminloginform").submit(function(){
        
    var username = document.forms["adminloginform"]["usernamelogin"].value;
    var password = document.forms["adminloginform"]["passwordlogin"].value;
    
    //tjekker om brugernavn er angivet
    if (username == "" || username.length>100) {
        alert("Du skal angive brugernavn (max 100 karakterer)");
        return false;
        
    //tjekker om password er angivet
    }else if(password == "" || lastname.length>200){
       
        alert("Du skal angive kodeord (max 200 karakterer)");
        return false;
    
    }
    
    });
});