    $('.change').on('click', function () {
         const itemProperties = $(this).parent().parent();
         $(itemProperties).find('.view').addClass('js-none');
         $(itemProperties).find('.variations').removeClass('js-none');
         $(itemProperties).find('.buttons').addClass('js-none');
         console.log(1);
    });
    $('.save').on('click', function () {
        $('.item-properties .variations').toggleClass('js-none');
        $('.item-properties .view').toggleClass('js-none');
        $('.item-properties .buttons').toggleClass('js-none');

    });

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('.remove').click(function (e) {
        e.preventDefault();
        let id = $(this).attr('data-id');
        let cartItem = $(this).closest('.cart-item-list');
        $.ajax({
            type:'POST',
            url:'/cart/remove-ajax',
            data:{
                rowId:id,
            },
            success:function(data){
                if(data.success)
                {
                    cartItem.remove();
                    $('.basket-dropdown').empty();
                    for(let [key, value] of Object.entries(data.content))
                    {
                        $('.basket-dropdown').append(' <a class="dropdown-item" href="#">'+ value[2]+' - '+ value[0] +' : ' + value[1] +' руб.</a>')
                    }
                    $('.basket-dropdown').append('<a class="dropdown-item" href="/cart">Перейти в корзину</a>')
                    $('.basket-total').text(data.count);
                    $('#total-sum').text(data.price);
                    $('.total-price').text(data.price);
                    $('#QUANTITY').text(data.count);
                }

            }
        });

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





