$(document).ready(function(){
    $('.menu-icon').click(function(){
        $('.menu-cont').slideToggle();
    });

    // Hide Header on on scroll down
    var didScroll;
    var lastScrollTop = 0;
    var delta = 5;
    var navbarHeight = $('nav').outerHeight();

    $(window).scroll(function(event){
        didScroll = true;
    });

    setInterval(function() {
        if (didScroll) {
            hasScrolled();
            didScroll = false;
        }
    }, 250);

    function hasScrolled() {
        var st = $(this).scrollTop();
        
        // Make sure they scroll more than delta
        if(Math.abs(lastScrollTop - st) <= delta)
            return;
        
        // If they scrolled down and are past the navbar, add class .nav-up.
        // This is necessary so you never see what is "behind" the navbar.
        if (st > lastScrollTop && st > navbarHeight ){
            // Scroll Down
            $('nav').removeClass('nav-down').addClass('nav-up');
            if($('.menu-cont').is(":visible") && window.matchMedia('(max-width: 850px)').matches){
                $('.menu-cont').slideUp();
            }
            
        } else {
            // Scroll Up
            if(st + $(window).height() < $(document).height() ) {
                $('nav').removeClass('nav-up').addClass('nav-down');
            
            }
        }
        lastScrollTop = st;
    }

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