
@extends('layout.layout')

@section("content")

    @include("layout.slider-banner")
    
    <div class="wrapper">
        <div class="container d-flex flex-column  align-items-center ">
            <p class="d-block border rounded-pill py-1 px-4 ">Детская стоматология</p>
            <p class="text-center">Лечение молочных зубов у детей — это необходимая мера, поскольку проблемы с молочными зубами могут отразиться на здоровье постоянных зубов. Кроме того, своевременное лечение зубов у детей позволит исключить развитие более серьезных заболеваний и осложнений.</p>
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
                    <h1 class="mb-4">Правильный подход к каждому ребенку</h1>
                    <p>Маленькие пациенты стоматолога нуждаются в особом подходе, ведь большинство детей боятся зубных врачей. В Dental работают высококлассные специалисты с профильным образованием в сфере детской стоматологии. Они проведут консультацию, определят существующие проблемы и организуют лечение таким образом, чтобы ваш ребенок не чувствовал страха и дискомфорта. В процессе лечения используют только безопасные для детей материалы и безболезненные методики. К тому же, все помещения клиник Dental совсем не похожи на больничные и совершенно лишены неприятных медицинских запахов, которые могут вызывать страх, это дает нам возможность полностью исключить негативные эмоции и переживания у детей.</p>
                    <p class="mb-4">Основные направления диагностики и лечения маленьких пациентов:</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Лечение пульпита молочных зубов</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Лечение кариеса молочных зубов</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Удаление молочных зубов</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Фторирование зубов</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Исправление прикуса в любом возрасте</p>
                </div>
            </div>
        </div>
    </div>
@stop