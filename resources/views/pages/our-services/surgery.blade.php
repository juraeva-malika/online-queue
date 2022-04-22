
@extends('layout.layout')

@section("content")

    @include("layout.slider-banner")
    <div class="wrapper">
        <div class="container d-flex flex-column  align-items-center ">
            <p class="d-block border rounded-pill py-1 px-4 ">Хирургия</p>
            <p class="text-center">Хирургическая стоматология у многих ассоциируется с удалением зубов, что является глубоким заблуждением. К сожалению, в некоторых случаях все же нет возможности спасти зубной элемент. 
            Удаление – единственный выход. А стоматологическая хирургия помогает сделать это безболезненно и в максимально короткие сроки.</p>
        </div>
    </div>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex flex-column">
                        <img class="img-fluid rounded w-75 align-self-end" src="{{asset("img/about-1.jpg")}}" alt="">
                        <img class="img-fluid rounded w-50 bg-white pt-3 pe-3" src="{{asset("img/about-2.jpg")}}" alt="" style="margin-top: -25%;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="mb-4">Причины для удаления зуба</h1>
                    <p>Причиной для удаления может быть полное его разрушение. Или же, причиной может стать раскол зубного элемента, неправильное расположение и высокая подвижность. 
                    Высококвалифицированные специалисты могут выполнять самое сложное удаление зубов, в том числе тех, которые полностью разрушены или неправильно расположены. <br>
                    У многих людей возникают проблемы с зубами мудрости и молярами. В том случае, если они неправильно прорезаются, они оказывают давление на соседние элементы, что в дальнейшем нарушает прикус.
                    Удаление зубов – это только маленькая часть работы хирургов. На самом деле современная хирургия включает в себя множество направлений.</p>
                    <p class="mb-4">Врачи наших клиник проводят зубосохраняющие операции, направленные на удаление воспалительного очага на верхушке корня. Простое и сложное удаление зубов:</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>дистопированных</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>ретинированных</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>разрушенных</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>остатков корней зубов</p>
                </div>
            </div>
        </div>
    </div>
@stop