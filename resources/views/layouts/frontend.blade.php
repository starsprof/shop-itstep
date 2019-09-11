<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/my_css.css') }}" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>

    <nav class="navbar navbar-expand-md shadow-sm bg-secondary">
        <div class="container">

            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('img/logo_white.svg') }}" title="oodji" class="logo_tpl_main_header" alt="oodji">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('category', ['id' => 1]) }}">Женщины</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('category', ['id' => 2]) }}">Мужчины</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Скидки</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Магазины</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Новости</a>
                    </li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>
    <footer class="bg-secondary">
        <div class="container">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link active" href="#">О нас</a>
                <ul>
                    <li><a href="#">О компании</a></li>
                    <li><a href="#">Новости</a></li>
                    <li><a href="#">Найти магазин</a></li>
                    <li><a href="#">Контакты</a></li>
                    <li><a href="#">Мобильное приложение</a></li>
                    <li><a href="#">Вакансии</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Все услуги</a>
                <ul>
                    <li><a href="#">Вопросы и ответы</a></li>
                    <li><a href="#">Как сделать заказ</a></li>
                    <li><a href="#">Таблица размеров</a></li>
                    <li><a href="#">Оплата товара</a></li>
                    <li><a href="#">Доставка товара</a></li>
                    <li><a href="#">Возврат товара</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Прочее</a>
                <ul>
                    <li><a href="#">Соглашение пользователя</a></li>
                    <li><a href="#">Правила интернет-торговли</a></li>
                    <li><a href="#">Знаки и правила ухода за товарами</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Будьте первыми, получая акции  и новости</a>
                <form action="" method="get" class="subscribe-form">
                    <input type="hidden" name="ACTION" value="SEND_CODE">
                    {{--<div class="checkbox-bar">--}}
                        {{--<label class=" checkbox ">--}}
                            {{--<input type="checkbox" name="RUBRIC[1]" value="1" class="hiddenCheckbox"> Женщинам        </label>--}}
                        {{--<label class=" checkbox ">--}}
                            {{--<input type="checkbox" name="RUBRIC[4]" value="4" class="hiddenCheckbox"> Мужчинам        </label>--}}
                    {{--</div>--}}
                    <div class="subscribe-box">
                        <input id="subscribe" value="" type="text" placeholder="Ваш e-mail адрес" name="EMAIL">
                        <input id="dosubscribe" type="submit" value="Подписаться">
                        <div class="smi social">
                            <a title="ВКонтакте" href="https://vk.com/oodji" target="_blank"><img src="//cdn.oodji.com/upload/iblock/75f/75f5541b986aaa8f67c5bcac0172722e.png"></a>
                            <a title="Twitter" href="https://twitter.com/oodji_com" target="_blank"><img src="//cdn.oodji.com/upload/iblock/bf3/bf314cdbd35e788e283b306652d2acc0.png"></a>
                            <a title="Facebook" href="https://www.facebook.com/pages/oodji/226340137496379" target="_blank"><img src="//cdn.oodji.com/upload/iblock/f77/f77baa5553baba97903b60d52e32bf27.png"></a>
                            <a title="Instagram" href="https://www.instagram.com/oodji.official/ " target="_blank"><img src="//cdn.oodji.com/upload/iblock/4eb/4ebe9a345a0197c9adb09748cb985191.png"></a>
                            <a title="Youtube" href="https://www.youtube.com/user/oodjiVideo?feature=watch" target="_blank"><img src="//cdn.oodji.com/upload/iblock/802/80201276f100320bc4b8814cbd731dda.png"></a>
                            <a title="Одноклассники" href="https://ok.ru/oodji" target="_blank"><img src="//cdn.oodji.com/upload/iblock/857/85719672c4e1dd15ad3ef28218ecc137.png"></a>

                        </div>
                    </div>
                </form>
            </li>


        </ul>
            <div class="copyright">
                <div class="dev">© 2019 oodji.com. Все права защищены</div>
            </div>
        </div>
    </footer>

<script src="{{ asset('js/app.js') }}"></script>
@stack('scripts')
</body>
</html>








