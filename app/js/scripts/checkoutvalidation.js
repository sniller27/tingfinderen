function validatecheckoutform() {
    
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

}