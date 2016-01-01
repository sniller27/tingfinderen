//Modernizr
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