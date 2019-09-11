<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="cartDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Корзина (<span class="basket-total">{{ Cart::count() }}</span>)
    </a>
    <div class="dropdown-menu basket-dropdown" aria-labelledby="cartDropdown">
        @foreach(Cart::content() as $cartItem)
        <a class="dropdown-item" href="#">{{ $cartItem->qty }} - {{ $cartItem->name }} : {{ $cartItem->price }} руб.</a>
        @endforeach
        <a class="dropdown-item" href="{{ route('cart') }}">Перейти в корзину</a>
    </div>
</li>
