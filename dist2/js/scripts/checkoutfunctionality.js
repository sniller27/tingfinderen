//check form change on checkout page
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
           
           
});