
@extends('layout.layout')

@section("content")

    @include("layout.slider-banner")

    <div class="wrapper">
        <div class="container d-flex flex-column  align-items-center ">
            <p class="d-block border rounded-pill py-1 px-4 ">Имплантология</p>
            <p class="text-center">Имплантация зубов – самое перспективное, актуальное и востребованное направление в современной стоматологии и протезировании. Это технология вживления титанового стержня в костную ткань с последующей установкой коронки, успешно практикуемая уже не одно десятилетие. Вживление импланта вместо отсутствующего зуба без обточки соседних зубов (как в случае с мостовидными протезами) является одним из главных преимуществ данного метода. При потере целой группы зубов также можно воспользоваться протезированием или имплантацией, однако обычный протез влияет на речь, ухудшает восприятие пищи и в большинстве случаев выглядит неестественно. 
            Именно имплантация зубов обеспечивает максимально прочную фиксацию, правильное распределение жевательной нагрузки, натуральный внешний вид зубов и практически неограниченный срок службы.</p>
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
                    <h1 class="mb-4">Виды имплантации зубов</h1>
                    <p>Существуют две основные схемы проведения данной процедуры – классическая и одномоментная (экспресс-имплантация). В первом случае речь идет о двухэтапной установке имплантов. Сначала подготавливается ложе для импланта в костной ткани путем проведения хирургической процедуры, после чего в кость устанавливаются абатмент и коронка. Классическая (двухэтапная) имплантация является наиболее универсальной схемой, позволяющей восполнять отсутствие зуба – в этом случае подготовка ложа уже не требуется, так как стержень устанавливается в образовавшуюся лунку и на него фиксируется временная коронка.</p>
                    <p class="mb-4">Среди основных достоинств имплантации зубов необходимо выделить:</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Воссоздание естественного внешнего вида зубов;</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Предупреждение заболеваний костной ткани;</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Сохранение природной формы десен;</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Устранение запрета на виды употребляемой пищи;</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Отсутствие необходимости обработки здоровых зубов;</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Длительный срок эксплуатации;</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Элементарность процедур по уходу;</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="mb-4">Подготовительный процесс</h1>
                    <p>Как и для проведения других процедур, связанных с хирургическим вмешательством, для имплантации также требуется подготовка. Данный этап не такой сложный и продолжительный, как думают некоторые пациенты, но для успешного проведения имплантации он необходим. Если приводить общую схему, то сначала нужно проконсультироваться с врачом, провести обследование состояния зубов и костной ткани, а также убедиться в отсутствии абсолютных противопоказаний. Далее должна быть проведена подготовка непосредственно полости рта, которая обычно включает в себя лечение кариеса, периодонтита, пародонтита и других заболеваний. Кроме этого, врач подробно информирует пациента о необходимости соблюдать гигиену полости рта и дает несколько общих рекомендаций.</p>
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