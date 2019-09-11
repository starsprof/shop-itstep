$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


$(".add-cart").click(function(e){
    e.preventDefault();
    let id = $(this).attr('data-id');
    $.ajax({
        type:'POST',
        url:'/cart/ajax',
        data:{
            id:id,
        },
        success:function(data){
            $('.basket-dropdown').empty();
            for(let [key, value] of Object.entries(data.content))
            {
                $('.basket-dropdown').append(' <a class="dropdown-item" href="#">'+ value[2]+' - '+ value[0] +' : ' + value[1] +' руб.</a>')
            }
            $('.basket-dropdown').append('<a class="dropdown-item" href="/cart">Перейти в корзину</a>')
            $('.basket-total').text(data.count);
        }
    });
});
