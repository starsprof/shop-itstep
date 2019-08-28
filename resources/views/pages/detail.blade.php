@extends('layouts.frontend')

@section('content')
    <div class="container">
        <div class="catalog-item d-flex flex-nowrap" style="padding: 50px 0">

            <div class="catalog-item-image"  style="width: 40%">
                <div class="img-wrap">
                    <img src="{{ asset('img/7e305d15065923a6fbec1d0dcf8f2369.jpg') }}" style="width: 100%; height: 400px">
                </div>
               <div class="images-wrap" style="margin-top: 10px">
                   <img src="{{ asset('img/7e305d15065923a6fbec1d0dcf8f2369.jpg') }}" style="width: 25%">
                   <img src="{{ asset('img/7e305d15065923a6fbec1d0dcf8f2369.jpg') }}" style="width: 25%">
                   <img src="{{ asset('img/7e305d15065923a6fbec1d0dcf8f2369.jpg') }}" style="width: 25%">
               </div>
            </div>
            <div class="catalog-item-description"  style="width: 60%; padding-left: 50px">
                <h2>Жакет трикотажный с рукавом</h2>
                    <br>

                    <p class="PropArticle" data-color="2301M">
                        <b>Модель:</b>17901016-2/46944/2301M</p>
                    <p><b>Состав:</b> <span>ПЭ 77%,</span> <span>Вис 19%,</span> <span>ПУ 4%</span></p>

                    <p><b>Линия:</b>
                        <a href="">Ultra</a>
                    </p>

                    <p><b>Цвет:</b> <span id="CurColor">серый</span></p>

                    <p><b>Цена:</b> <span id="CurColor">1234</span></p>

                    <button class="bg-danger">В КОРЗИНУ</button>
                    <br>

                    <p><b>Описание:</b> <span id="CurColor">Элегантные чиносы зауженного силуэта. Модель традиционного кроя с боковыми карманами с отрезным бочком и задними врезными карманами. Ремень из искусственной кожи в комплекте изящно подчеркивает линию талии. Хлопковая ткань приятна для тела, дышит, не электризуется и отлично носится. В этих брюках вам будет комфортно даже в жаркую погоду. Стильные хлопковые брюки помогут вам создать элегантный повседневный или деловой комплект. Они универсальны и будут уместны на официальной встрече, во время путешествий или на свидании. Умело сочетая их с разной одеждой, вы всегда можете выглядеть по-разному. С блузкой и туфлями-лодочками у вас получится сдержанный и элегантный комплект для работы. Более непринужденный комплект для прогулок и отдыха легко создать, подобрав к брюкам кеды и принтованную футболку. Аксессуары и украшения помогут вам расставить акценты в созданном образе. Отличные брюки для вашего гардероба. </span></p>

            </div>

        </div>
    </div>
@endsection