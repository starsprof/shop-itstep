$(document).ready(function(){

    $('.change').on('click', function () {
        $('.item-properties .view').addClass('js-none');
        $('.item-properties .buttons').addClass('js-none');
        $('.item-properties .variations').toggleClass('js-none');

    });
    $('.save').on('click', function () {
        $('.item-properties .variations').toggleClass('js-none');
        $('.item-properties .view').toggleClass('js-none');
        $('.item-properties .buttons').toggleClass('js-none');

    })

});


// const contentCart = document.querySelector('.cart-items-block');
// const blockCart = document.querySelectorAll('.cart-item-list');
// const blockChange = document.querySelectorAll('.cart-item-list .change');
// const blockSave = document.querySelectorAll('.cart-item-list .save');
// const blockButtons = document.querySelectorAll('.cart-item-list .item-properties .buttons');
// const blockVieW = document.querySelectorAll('.cart-item-list .item-properties .view');
// const blockVariations = document.querySelectorAll('.cart-item-list .item-properties .variations');


// blockChange.addEventListener('click', function () {
//     alert(1);
//     blockVieW.classList.add('js-none');
//     blockButtons.classList.add('js-none');
//     blockVariations.classList.toggle('js-none');
//
// });
//
// blockSave.addEventListener('click', function () {
//     blockVariations.classList.toggle('js-none');
//     blockVieW.classList.toggle('js-none');
//     blockButtons.classList.toggle('js-none');
//
//
// });





