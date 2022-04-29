
@extends('layouts.layout')

@section("content")

    @include("layouts.slider-banner")

    <div class="wrapper">
        <div class="container d-flex flex-column  align-items-center ">
            <p class="d-block border rounded-pill py-1 px-4 ">Ортопедия</p>
            <p class="text-center">Ортопедическая стоматология - это раздел стоматологии, который занимается протезированием зубов по определенным стоматологическим методикам, целью которых и есть восстановление целостности зубного ряда. Протезирование зубов на данный момент подразделяют на такие виды как: микропротезирование, съемное протезирование и несъемное протезирование, «протезирование на имплантах».</p>
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
                    <h1 class="mb-4">Создание полноценной имитации зубов</h1>
                    <p>Ортопедическая стоматология предлагает помощь в лечении нарушений целостности зубочелюстной системы с помощью методов протезирования. Стоматологи-ортопеды проводят диагностику функциональности зубочелюстной системы и назначают соответствующий способ лечения. Современная ортодонтия в области стоматологии предполагает лечение заболеваний, связанных с нарушением функций органов челюстно-лицевой области, а также осуществление протезирования зубов.</p>
                    <p class="mb-4">К протезированию сегодня выдвигаются высокие требования. Утраченные зубы необходимо заменить или восстановить таким образом, чтобы получившийся в результате зуб не только выполнял основную функцию, он и имел привлекательный вид. Протезирование предполагает полное восстановление эстетических параметров зуба, создание полноценной имитации естественных зубов. При этом зубы должны справляться с надкусыванием и пережевыванием пищи. Оставшиеся зубы не должны быть повреждены: стоматологам-ортопедам необходимо правильно распределить нагрузку во время жевания, а также создать оптимальные условия для проведения профессиональной и индивидуальной гигиены. </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <p class="mb-4">Мы предлагаем нашим пациентам самые современные виды протезирования, при этом уделяя значительное внимание достижению эстетического и практического результата</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Цельнолитая коронка и зуб</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Фасетки, коронки с облицовкой</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Бюгельный протез на аттачменах</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Полный, частичный протез из БИОпласта</p>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex flex-column">
                        <img class="img-fluid rounded w-75 align-self-end" src="{{asset("img/about-1.jpg")}}" alt="">
                        <img class="img-fluid rounded w-50 bg-white pt-3 pe-3" src="{{asset("img/about-2.jpg")}}" alt="" style="margin-top: -25%;">
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop