
// открыть по кнопке
$('.js-button-campaign').click(function() {

    $('.js-overlay-campaign').fadeIn();
    $('.js-overlay-campaign').addClass('disabled');
});

// закрыть на крестик
$('.js-close-campaign').click(function() {
    $('.js-overlay-campaign').fadeOut();

});

// открыть по кнопке
$('.js-button-cheaper').click(function() {

    $('.js-overlay-cheaper').fadeIn();
    $('.js-overlay-cheaper').addClass('disabled');
});

// закрыть на крестик
$('.js-close-cheaper').click(function() {
    $('.js-overlay-cheaper').fadeOut();

});