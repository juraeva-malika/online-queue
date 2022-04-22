
@extends('layout.layout')

@section("content")

    @include("layout.slider-banner")

    <div class="wrapper">
        <div class="container d-flex flex-column  align-items-center ">
            <p class="d-block border rounded-pill py-1 px-4 ">Терапия</p>
            <p class="text-center">Одна из важнейших отраслей стоматологии – терапевтическая, она отвечает за профилактику заболеваний зубов и полости рта, а также лечение кариеса и устранение его последствий. Из рекламных роликов о кариесе, которые мы постоянно видим, можно узнать о том, как его предотвратить. И пусть не всегда эти методы действительно хороши, - комплексная и качественная гигиена полости рта способна предотвратить или отсрочить появление кариозных заболеваний.</p>
        </div>
    </div>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex flex-column">
                        <img class="img-fluid rounded w-75 align-self-end" src="img/about-1.jpg" alt="">
                        <img class="img-fluid rounded w-50 bg-white pt-3 pe-3" src="img/about-2.jpg" alt="" style="margin-top: -25%;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="mb-4">Предупреждаем возникновение и лечим кариес, пульпит, периодонтит</h1>
                    <p>Не у всех людей зубы идеальны от природы, бывает и такое, что из-за плохой наследственности зубы быстро стареют и разрушаются, несмотря на все усилия их спасти. Если у человека есть проблемы с зубами, то рекомендуется хотя бы раз в полгода посещать стоматолога. Кариес лучше устранять на этапе его зарождения и не ждать, когда будут осложнения.</p>
                    <p class="mb-4">Одним из таких «сюрпризов» является пульпит – сложное заболевание, при котором воспаляется пульпа, другими словами нерв, и, что характерно для этого вида заболевания, - оно дает о себе знать к ночи, когда вам меньше всего захочется ехать к врачу, да и врачи в большинстве своем уже не работают. Утром боль стихает и появляется твердая уверенность, что проблема решилась сама собой, многие даже забывают о ней, но снова приходит ночь и приносит с собой боль и бессонницу. </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="mb-4">Не допускайте критического момента </h1>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Таблетки – обезболивающие дают при этом лишь небольшое облегчение. И так повторяется из ночи в ночь, и только самые стойкие терпят до последнего, на третий-четвертый день обычно люди уже идут к врачу. Лечение на этом этапе – сложное, но не до такой степени, если бы человек откладывал посещение от двух до четырех недель, ведь в этот момент осложнения переходят в хроническую стадию, неся с собой набор неблагоприятных последствий.</p>
                    <p>Цель каждого стоматолога-терапевта – спасти зуб, не допустить его удаления. Если он видит, что зуб еще можно спасти, то он сделает все возможное и невозможное, чтобы он прослужил как можно дольше. И помните: чем раньше вы выявите кариес, тем проще будет от него избавиться. Практически в 99,9% случаев кариес даст осложнения, которые приводят к более тяжелым формам заболевания. С каждым годом данное заболевание поражает все больше и больше людей.</p>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex flex-column">
                        <img class="img-fluid rounded w-75 align-self-end" src="img/about-1.jpg" alt="">
                        <img class="img-fluid rounded w-50 bg-white pt-3 pe-3" src="img/about-2.jpg" alt="" style="margin-top: -25%;">
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop