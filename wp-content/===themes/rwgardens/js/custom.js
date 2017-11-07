jQuery(document).ready(function () {
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
                , nav: true
            }
            , 600: {
                items: 3
                , nav: false
            }
            , 1000: {
                items: 3
                , nav: true
                , loop: false
                , margin: 30
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
    
    
    
});