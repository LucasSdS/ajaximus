var offset = $('#menu').offset().top;
var $meuMenu = $('#menu'); // guardar o elemento na memoria para melhorar performance
$(document).on('scroll', function () {
    if (offset <= $(window).scrollTop()) {
        $meuMenu.addClass('navbar-fixed-top');
    } else {
        $meuMenu.removeClass('navbar-fixed-top');
    }
});