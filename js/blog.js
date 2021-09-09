
document.addEventListener("DOMContentLoaded", function() {
    var lazyloadImages = document.querySelectorAll("img.lazy");    
    var lazyloadThrottleTimeout;
    
    function lazyload () {
      if(lazyloadThrottleTimeout) {
        clearTimeout(lazyloadThrottleTimeout);
      }    
      
      lazyloadThrottleTimeout = setTimeout(function() {
          var scrollTop = window.pageYOffset;
          lazyloadImages.forEach(function(img) {
              if(img.offsetTop < (window.innerHeight + scrollTop)) {
                img.src = img.dataset.src;
                img.classList.remove('lazy');
              }
          });
          if(lazyloadImages.length == 0) { 
            document.removeEventListener("scroll", lazyload);
            window.removeEventListener("resize", lazyload);
            window.removeEventListener("orientationChange", lazyload);
          }
      }, 20);
    }
    
    document.addEventListener("scroll", lazyload);
    window.addEventListener("resize", lazyload);
    window.addEventListener("orientationChange", lazyload);
    lazyload();
    
  });


$(document).ready(function(){

    // slide
    $('.slide').hide();

    var len = $('.slide').length - 1;
    var center = 0;
    $('.slide').eq(center).show();
    $('.slide').eq(center).css('opacity', 1);

    $('.next').click(function(){
        $('.slide').eq(center).removeClass('active').addClass('inactive');
        setTimeout(function(){
            $('.slide').eq(center).hide();
            center += 1;
            if(center>len){
                center=0;
            }
            $('.slide').eq(center).show().removeClass('inactive').addClass('active');
        }, 300);
        
    });

    $('.prev').click(function(){
        $('.slide').eq(center).removeClass('active').addClass('inactive');
        setTimeout(function(){
            $('.slide').eq(center).hide();
            center -= 1;
            if(center<0){
                center=len;
            }
            $('.slide').eq(center).show().removeClass('inactive').addClass('active');
        }, 300);
    });

    

   

});