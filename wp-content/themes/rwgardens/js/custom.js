jQuery(document).ready(function () {
    var b = jQuery("body");
    var h = jQuery("header");
    var pos = h.position();
    jQuery(window).scroll(function () {
        var windowpos = jQuery(window).scrollTop();
        if (windowpos >= 150) {
            b.addClass("p130");
            h.addClass("stick animated slideInDown");
        }
        else {
            b.removeClass("p130");
            h.removeClass("stick animated slideInDown");
        }
    });
    jQuery('.navbar-right .menu-item-has-children').addClass('dropdown');
    jQuery('.popup-gallery').magnificPopup({
        delegate: 'a'
        , type: 'image'
        , tLoading: 'Loading image #%curr%...'
        , mainClass: 'mfp-img-mobile'
        , gallery: {
            enabled: true
            , navigateByImgClick: true
            , preload: [0, 1]
        }
    });
    jQuery('.latestBlog').owlCarousel({
        loop: true
        , navText: ['<img src="https://s26.postimg.org/bfoi5ktm1/left-arrow.png" alt="prev"/> ', '<img src="https://s26.postimg.org/s4py1hq7d/ryt-arrow.png" alt="next"/>']
        , margin: 10
        , responsiveClass: true
        , responsive: {
            0: {
                items: 1
            }
            , 600: {
                items: 2
            }
            , 1000: {
                items: 2
            }
            , 1024: {
                items: 3
            }
        }
    });
    jQuery('.testimonials').owlCarousel({
        loop: true
        , navText: ['<img src="https://s26.postimg.org/bfoi5ktm1/left-arrow.png" alt="prev"/> ', '<img src="https://s26.postimg.org/s4py1hq7d/ryt-arrow.png" alt="next"/>']
        , margin: 25
        , responsiveClass: true
        , responsive: {
            0: {
                items: 1
                , nav: true
            }
            , 600: {
                items: 2
                , nav: false
            }
            , 1000: {
                items: 2
                , nav: true
                , loop: false
            }
        }
    });

    
    jQuery('.navbar-nav>li.menu-item-has-children').each(function () {
        
        var HasDrop = jQuery(this);
        var HasDropClick = jQuery(this).find(".DropClick");
        
        
    
       jQuery(this).prepend('<span class="DropClick"></span>');
     
     });
    
    
     jQuery(document).find('.DropClick').on("click", function(){

            jQuery(this).parent().toggleClass("open");
            
        });
	
});