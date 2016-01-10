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
});;//check form change on checkout page
var formHasChanged = false;
var submitted = false;

$(document).on('change', '#checkoutform input', function (e) {
    formHasChanged = true;
});

$(document).ready(function(){
    window.onbeforeunload = function (e) {
        if (formHasChanged && !submitted) {
            var message = "Din udfyldte betalingsinformation vil forsvinde, hvis du forlader denne side.", e = e || window.event;
            if (e) {
                e.returnValue = message;
            }
            return message;
        }
    }
    
 $("#checkoutform").submit(function() {
     submitted = true;
     });
//    var formHasChanged = false;
//    var submitted = false;
//    window.onbeforeunload = function(e) {
//              return 'Din betalingsinformation vil blive fjernet.';
//        
//};

    //check if form exists on page
    if(document.getElementById('checkoutform') != null){
        //radio buttons functioning
        if(document.getElementById('yessent').checked == true){
           document.getElementById('deliveryaddress').disabled = true;
            //hide selections
            $("#deliveryaddress").hide();
            $(".nb").hide();
        }
//           document.getElementById('deliveryaddress').disabled = true;
           
           document.getElementById('yessent').onchange = disablefield;
           document.getElementById('nosent').onchange = disablefield;
           
           function disablefield(){

if (document.getElementById('nosent').checked == true){
    
            document.getElementById('deliveryaddress').disabled = false;
            //show selections
            $("#deliveryaddress").show();
            $(".nb").show();

    
}
else if (document.getElementById('yessent').checked == true){
    
            document.getElementById('deliveryaddress').disabled = true;
            //hide selections
            $("#deliveryaddress").hide();
            $(".nb").hide();

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
});;//Modernizr
$(document).ready(function(){
 
           //Modernizr SVG to PNG
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
           
           //Placeholders in forms
           if(!Modernizr.input.placeholder){

            $('[placeholder]').focus(function() {
              var input = $(this);
              if (input.val() == input.attr('placeholder')) {
                input.val('');
                input.removeClass('placeholder');
              }
            }).blur(function() {
              var input = $(this);
              if (input.val() == '' || input.val() == input.attr('placeholder')) {
                input.addClass('placeholder');
                input.val(input.attr('placeholder'));
              }
            }).blur();
            $('[placeholder]').parents('form').submit(function() {
              $(this).find('[placeholder]').each(function() {
                var input = $(this);
                if (input.val() == input.attr('placeholder')) {
                  input.val('');
                }
              })
            });

        }
         
           
});