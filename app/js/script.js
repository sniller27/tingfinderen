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
});;$(document).ready(function(){

    //check if form exists on page
    if(document.getElementById('checkoutform') != null){
        //radio buttons functioning
           document.getElementById('deliveryaddress').disabled = true;
           
           document.getElementById('yessent').onchange = disablefield;
           document.getElementById('nosent').onchange = disablefield;
           
           function disablefield(){

if (document.getElementById('nosent').checked == true ){
    
            document.getElementById('deliveryaddress').disabled = false;

    
}
else if (document.getElementById('yessent').checked == true ){
    
            document.getElementById('deliveryaddress').disabled = true;

}   

}
    }
           
           
});;////old way. function call
//function validatecheckoutform() {
//    
//    var firstname = document.forms["checkoutform"]["firstname"].value;
//    var lastname = document.forms["checkoutform"]["lastname"].value;
//    var address = document.forms["checkoutform"]["address"].value;
//    var zipcode = document.forms["checkoutform"]["zipcode"].value;
//    var email = document.forms["checkoutform"]["email"].value;
//    var radio1 = document.getElementById('yessent').checked;
//    var radio2 = document.getElementById('nosent').checked;
//    
//    //tjekker om fornavn er angivet
//    if (firstname == "" || isNaN(firstname)==false || firstname.length>100) {
//        alert("Du skal angive dit navn (max 100 karakterer)");
//        return false;
//        
//    //tjekker om efternavn er angivet
//    }else if(lastname == "" || isNaN(lastname)==false || lastname.length>100){
//       
//        alert("Du skal angive dit efternavn (max 100 karakterer)");
//        return false;
//    
//    }else if(address == "" || address.length>45){
//       
//        alert("Du skal angive din adresse (max 45 karakterer)");
//        return false;
//    
//    }else if(isNaN(zipcode) || zipcode.length !=4){
//       
//        alert("Du skal angive dit post nr som 4 cifre");
//        return false;
//    
//    }else if(email == "" || email.length>100){
//       
//        alert("Du skal angive din email (max 100 karakterer)");
//        return false;
//    
//    }else if(radio1 == false && radio2 == false){
//       
//        alert("Du skal vælge en af mulighederne.");
//        return false;
//    
//    }
//
//}


//new way. external submit
$(document).ready(function(){
    $("#checkoutform").submit(function(){
        
   
            var firstname = document.forms["checkoutform"]["firstname"].value;
    var lastname = document.forms["checkoutform"]["lastname"].value;
    var address = document.forms["checkoutform"]["address"].value;
    var zipcode = document.forms["checkoutform"]["zipcode"].value;
    var email = document.forms["checkoutform"]["email"].value;
    var radio1 = document.getElementById('yessent').checked;
    var radio2 = document.getElementById('nosent').checked;
    
    //tjekker om fornavn er angivet
    if (firstname == "" || isNaN(firstname)==false || firstname.length>100) {
        alert("Du skal angive dit navn (max 100 karakterer)");
        return false;
        
    //tjekker om efternavn er angivet
    }else if(lastname == "" || isNaN(lastname)==false || lastname.length>100){
       
        alert("Du skal angive dit efternavn (max 100 karakterer)");
        return false;
    
    }else if(address == "" || address.length>45){
       
        alert("Du skal angive din adresse (max 45 karakterer)");
        return false;
    
    }else if(isNaN(zipcode) || zipcode.length !=4){
       
        alert("Du skal angive dit post nr som 4 cifre");
        return false;
    
    }else if(email == "" || email.length>100){
       
        alert("Du skal angive din email (max 100 karakterer)");
        return false;
    
    }else if(radio1 == false && radio2 == false){
       
        alert("Du skal vælge en af mulighederne.");
        return false;
    
    }
        
        
    });
});;////old way. function call
//function validatecontactform() {
//    
//    var name = document.forms["contactform"]["name"].value;
//    var email = document.forms["contactform"]["mail"].value;
//    var message = document.forms["contactform"]["msg"].value;
//    
//    //tjekker om brugernavn er angivet
//    if (name == "") {
//        alert("Du skal angive dit navn.");
//        return false;
//        
//    //tjekker om password er angivet
//    }else if(email == ""){
//       
//        alert("Du skal angive din email.");
//        return false;
//    
//    }else if(message == ""){
//       
//        alert("Du skal skrive noget i beskeden.");
//        return false;
//    
//    }
//
//}

//new way. external submit
$(document).ready(function(){
    $("#contactform").submit(function(){
        var name = document.forms["contactform"]["name"].value;
    var email = document.forms["contactform"]["mail"].value;
    var message = document.forms["contactform"]["msg"].value;
    
    //tjekker om brugernavn er angivet
    if (name == "") {
        alert("Du skal angive dit navn.");
        return false;
        
    //tjekker om password er angivet
    }else if(email == ""){
       
        alert("Du skal angive din email.");
        return false;
    
    }else if(message == ""){
       
        alert("Du skal skrive noget i beskeden.");
        return false;
    
    }
    });
});