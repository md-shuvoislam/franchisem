(function ($) {
	"use strict";

    $(document).ready(function() {  

        var offersSlider = $('.blog-slider');
        offersSlider.owlCarousel({
            loop:1,
            margin:10,
            nav:true,
            dots: false,
            items: 3,
            autoplay:0,
            autoplayTimeout:3000,
                responsive:{
                0:{
                    items:1
                },
                768:{
                    items:2
                },
                1200:{
                    items:3
                }
            }
        });

        function offerSliderClasses( ) {
            offersSlider.each(function() {
                var total = $(this).find('.owl-item.active').length;
                $(this).find('.owl-item').removeClass('firstitem');
                $(this).find('.owl-item').removeClass('lastitem');
                $(this).find('.owl-item.active').each(function(index) {
                    if (index === 0) {
                        $(this).addClass('firstitem')
                    }
                    if (index === total - 1 && total > 1) {
                        $(this).addClass('lastitem')
                    }
                })
            })
        }
        offerSliderClasses();
        offersSlider.on('translated.owl.carousel', function(event) {
            offerSliderClasses()
        }); 

        var brandSlider = $('.brand-slider');
        brandSlider.owlCarousel({
            loop:1,
            margin:10,
            nav:true,
            dots: false,
            items: 4,
            autoplay:1,
            autoplayTimeout:3000,
            responsive:{
                0:{
                    items:2
                },
                768:{
                    items:4
                }
            }
        });
     
        function brandSliderClasses( ) {
            brandSlider.each(function() {
                var total = $(this).find('.owl-item.active').length;
                $(this).find('.owl-item').removeClass('firstactiveitem');
                $(this).find('.owl-item').removeClass('lastactiveitem');
                $(this).find('.owl-item.active').each(function(index) {
                    if (index === 0) {
                        $(this).addClass('firstactiveitem')
                    }
                    if (index === total - 1 && total > 1) {
                        $(this).addClass('lastactiveitem')
                    }
                })
            })
        }
        brandSliderClasses();
        brandSlider.on('translated.owl.carousel', function(event) {
            brandSliderClasses();
        }); 

        var myAccbrandSlider = $('.my-acc-brand-slider');
        myAccbrandSlider.owlCarousel({
            loop:1,
            margin:10,
            nav:true,
            dots: false,
            items: 3,
            autoplay:1,
            autoplayTimeout:3000,
            responsive:{
                0:{
                    items:1
                },
                768:{
                    items:3
                }
            }
        });

        function myAccbrandSliderClasses( ) {
            myAccbrandSlider.each(function() {
                var total = $(this).find('.owl-item.active').length;
                $(this).find('.owl-item').removeClass('firstactiveitem');
                $(this).find('.owl-item').removeClass('lastactiveitem');
                $(this).find('.owl-item.active').each(function(index) {
                    if (index === 0) {
                        $(this).addClass('firstactiveitem')
                    }
                    if (index === total - 1 && total > 1) {
                        $(this).addClass('lastactiveitem')
                    }
                })
            })
        }
        myAccbrandSliderClasses();
        myAccbrandSlider.on('translated.owl.carousel', function(event) {
            myAccbrandSliderClasses();
        }); 

        $('.sandhas-onsale ul.products').owlCarousel({
            loop:1,
            margin:30,
            nav:true,
            dots: false,
            items: 3,
            autoplay:0,
            autoplayTimeout:3000,
            responsive:{
                0:{
                    items:1,
                    margin:0
                },
                768:{
                    items:2,
                    margin:15
                },
                992:{
                    items:3,
                    margin:30
                }
            }
        });

        $('.sd-order-imgs').owlCarousel({
            loop:1,
            margin:10,
            nav:0,
            dots: false,
            items: 1,
            autoplay:0,
        });        
        
        
        $(document).on('submit','.woocommerce form.register',function(e){

            var pass = $(this).find('#reg_password').val();
            var repass = $(this).find('#reg_password_repeat').val();

            var privacy = $(this).find('#privacy-checkbox').is(':checked');
            var privacy2 = $(this).find('#privacy-checkbox-2').is(':checked');

            if( repass != pass ){
                alert('Passwort stimmt nicht überein');
                console.log('Password Not Match');
                e.preventDefault();
            }

            if( privacy == false || privacy2 == false ){
                alert('You must accept privacy policy');
                console.log(privacy+'You must accept privacy policy');
                console.log(privacy2+'You must accept privacy policy 2');

                e.preventDefault();
            }
            
        });
        
  
     }); //.document/ready

    $(window).on('load', function(){      
        
        jQuery('.brand-slider').trigger('refresh.owl');
        jQuery('.my-acc-brand-slider').trigger('refresh.owl');

    });

}(jQuery));