/**
 * Created by hugominari on 21/01/16.
 */
$(document).ready(function(){

    $('.sliders').slick({
        dots: true,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 5500,
        speed: 500,
        fade: true,
        cssEase: 'linear',
    });


    $('[data-toggle="popover"]').popover({
        trigger: "hover",
        container: 'body',
    });


    $(function() {
        $('a.page-scroll').bind('click', function(event) {
            var $anchor = $($(this).attr('href'));
            //alert ($anchor);
            $('html, body').stop().animate({
                scrollTop: $anchor.offset().top - 65
            }, 1500, 'easeInOutExpo');
            event.preventDefault();
        });
    });

    // Highlight the top nav as scrolling occurs
    $('body').scrollspy({
        target: '.navbar-fixed-top',
        offset: 100,
    })


    // Closes the Responsive Menu on Menu Item Click
    $('.navbar-collapse ul li a').click(function() {
        $('.navbar-toggle:visible').click();
    });


    $('#maps').click(function(event) {
        event.preventDefault();
        $('#googlemaps').animate({
                height: 'toggle'
            }, 1000
        );
    });

    $('#openatas').click(function(event) {
        event.preventDefault();
        $('#showatas').animate({
                height: 'toggle'
            }, 1000
        );
    });




});

$(window).resize(function(){
    if ($(window).width() <= 976 ){
        $('.navbar-right a[href="#solucoes"]').attr('href','#solucoes2');
    }else{
        $('.navbar-right a[href="#solucoes2"]').attr('href','#solucoes');
    }
});

$(window).on('scroll', function(){
    if($(window).scrollTop()>=130 && !$('nav').hasClass('navbar-fixed-top')){

        $('nav').addClass('navbar-fixed-top');
        $('body').css('paddingTop', '106px');

        caminho = $('.navbar-brand img').attr('src');
        newcaminho = caminho.replace('light', 'dark');
        $('.navbar-brand img').attr('src', newcaminho);

        alt = $('.navbar-brand img').attr('alt');
        newalt = alt.replace('light', 'dark');
        $('.navbar-brand img').attr('alt', newalt);


    }
    else if($(window).scrollTop()<130 && $('nav').hasClass('navbar-fixed-top')){

        $('nav').removeClass('navbar-fixed-top');
        $('body').css('paddingTop', '0');

        caminho = $('.navbar-brand img').attr('src');
        newcaminho = caminho.replace('dark', 'light');
        $('.navbar-brand img').attr('src', newcaminho);

        alt = $('.navbar-brand img').attr('alt');
        newalt = alt.replace('dark', 'light');
        $('.navbar-brand img').attr('alt', newalt);
    }
});