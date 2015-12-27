$(document).ready(function(){

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
           
           
});