function validatecontactform() {
    
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

}