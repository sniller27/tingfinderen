$(document).ready(function(){
	$("#zipcode").keyup(function(e){
        
        // get keycode of current keypress event
        var code = (e.keyCode || e.which);

//        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
//             // Allow: Ctrl+A
//            (e.keyCode == 65 && e.ctrlKey === true) ||
//             // Allow: Ctrl+C
//            (e.keyCode == 67 && e.ctrlKey === true) ||
//             // Allow: Ctrl+X
//            (e.keyCode == 88 && e.ctrlKey === true) ||
//             // Allow: home, end, left, right
//            (e.keyCode >= 35 && e.keyCode <= 39)) {
//                 // let it happen, don't do anything
//                 return;
//        }
        
        // do nothing if it's an arrow key
        if(code == 37 || code == 38 || code == 39 || code == 40) {
            return;
        }
        
		$.get("php/getzipcodes.php", {zipcode: $(this).val()}, function(data){
			$("datalist").empty();
			$("datalist").html(data);
		});
	});
});