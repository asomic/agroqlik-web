( function( $ ) {

    // Menú
    $('.hamburger').click(function(){
      $(this).toggleClass('is-active');
      $('.buttons').toggleClass('open-buttons', 100)
    });

    $('.button-plan-info').click(function(){
      $('.modal-obtener').addClass('show-modal');
      return false;
    });
    $('.button-plan-prueba').click(function(){
      $('.modal-contratar').addClass('show-modal');
      return false;
    });
    $('.modal .x').click(function(){
      $('.modal').removeClass('show-modal');
      return false;
    });

    $(window).scroll(function() {
      var scroll = $(window).scrollTop();

      if (scroll >= 500) {
        $('header').addClass('on-down');
      } else {
        $('header').removeClass('on-down');
      }

      });

    AOS.init({
      once: true
    });

} )( jQuery );





$(document).ready(function(){

    $("#GoApp").click(function() {
        $('html, body').toggleClass('lock-scroll')
        $([document.documentElement, document.body]).animate({
            scrollTop: $("#APP").offset().top
        }, 1500);

        return false;
    });

    $("#GoWeb").click(function() {
        $('html, body').toggleClass('lock-scroll')
        $([document.documentElement, document.body]).animate({
            scrollTop: $("#WEB").offset().top
        }, 1500);

        return false;
    });

    $("#GoServicios").click(function() {
        $('html, body').toggleClass('lock-scroll')
        $([document.documentElement, document.body]).animate({
            scrollTop: $("#servicio").offset().top
        }, 1500);

        return false;
    });

    $("#GoEquipo").click(function() {
        $('html, body').toggleClass('lock-scroll')
        $([document.documentElement, document.body]).animate({
            scrollTop: $("#equipo").offset().top
        }, 1500);

        return false;
    });

    $("#GoPlanes").click(function() {
        $('html, body').toggleClass('lock-scroll')
        $([document.documentElement, document.body]).animate({
            scrollTop: $("#planes").offset().top
        }, 1500);

        return false;
    });


    $("#GoPlanes").click(function() {
        $('html, body').toggleClass('lock-scroll')
        $([document.documentElement, document.body]).animate({
            scrollTop: $("#planes").offset().top
        }, 1500);

        return false;
    });

    $(".goToUp").click(function() {
        $([document.documentElement, document.body]).animate({

            scrollTop: $("#top").offset().top

        }, 1000);
        return false;
    });

});
