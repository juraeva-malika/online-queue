
@extends('layouts.layout')

@section("content")

    @include("layouts.slider-banner")
     <div class="wrapper">
        <div class="container d-flex flex-column  align-items-center ">
            <p class="d-block border rounded-pill py-1 px-4 ">Гигиена</p>
            <p class="text-center">С самых ранних лет родители учат детей чистить зубы. Это не только полезная привычка, но и идеальная защита, и профилактика ряда заболеваний полости рта.</p>
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
                    <h1 class="mb-4">Лучшая профилактика против кариеса</h1>
                    <p class="mb-4">Сегодня одной чистки зубов зачастую недостаточно. Напряженный ритм жизни, стрессы, большое количество сладкой и соленой пищи, способствует быстрому загрязнению зубов и в течении дня образуется налет. Далее из налета берет свое начало зубной камень, который уже влечет серьезные последствия для здоровья не только зубов, но и организма в целом. Чистка зубов в стоматологии раз в полгода или хотя бы раз в год поможет вам избежать многих проблем. И сделает посещение стоматолога не тяжелой повинностью, а приятным времяпрепровождением.</p>
                    <p>Стоимость профессиональной чистки зубов во многом зависит от фронта работ: количества зубов, использования анестезии и т.д. Это комплекс манипуляций, направленный на то, чтобы вся зубочелюстная система была в тонусе. В этом наборе имеются:</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Ультразвук</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Система Air Flow</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Полирование с использованием специальных паст</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>И многое другое</p>
                </div>
            </div>
        </div>
    </div>
      <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="mb-4">Метод отбеливания air flow</h1>
                    <p>Air flow – процедура, с использованием пескоструйного оборудования швейцарского производства. Принцип ее действия заключается в том, что определенная доза смешанных с водой абразивных частиц под давлением направляется на поверхность зубов. Под их воздействием налет расщепляется и вымывается. Вместе с ним удаляются и болезнетворные бактерии. Одновременно шлифуется и полируется эмаль. За счет удаления мягкого зубного налета, поверхностной пигментации от употребления кофе, чая, сигарет и других красящих веществ, зубам возвращается их природный жемчужный цвет и блеск. Отчистка производится в труднодоступных для обычной щетки местах, таких как межзубные промежутки.</p>
                    <p class="mb-4">Показания к обработке зубов методикой air flow:</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Необходимость удаления зубного налета различного происхождения.</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Потемнение эмали</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Чистка виниров, керамики, брекетов, верхней части имплантатов и пр.</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Обработка зубной поверхности перед осветлением или отбеливанием препаратами фтора.</p>
                    <p class="mb-4">Противопоказания к процедуре air flow:</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Хронический бронхит или бронхиальная астма.</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Использование бессолевой диеты.</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Индивидуальная непереносимость вкуса цитрусовых.</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Кардиостимулятор.</p>
                    <p class="mb-4">В течение трех часов после проведения процедуры:</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Нельзя пить кофе и чай;</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Нельзя употреблять в пищу продукты, содержащие красящие вещества, желательно в течение этого времени совсем отказаться от приема пищи;</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Нельзя курить</p>
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
                    <p  class="mb-4"><i class="far fa-check-circle text-primary me-3"></i>Чистка зубов ультразвуком</p>
                    <p class="mb-4">Этот метод отличается тем, что благодаря ему удаляется зубной камень. Наиболее опасными считаются поддесневые отложения, с которыми успешно борется ультразвуковой аппарат.</p>
                    <p class="mb-4"><i class="far fa-check-circle text-primary me-3"></i>Полирование</p>
                    <p class="mb-4">Данный метод позволяет предотвратить прилипание налета с помощью специфических паст.</p>
                    <p class="mb-4"><i class="far fa-check-circle text-primary me-3"></i>Реминерализирующая терапия.</p>
                    <p class="mb-4">Данный метод позволяет восстановить минеральный состав зубной эмали. Особенно полезен он для тех, у кого быстро вымываются минеральные элементы из эмали или происходят подобного рода нарушения в организме.</p>
                    <p class="mb-4"><i class="far fa-check-circle text-primary me-3"></i>Фторирование</p>
                    <p class="mb-4">Если вы уже хотя бы раз проходили процедуру профессиональной чистки зубов, то вероятно, знаете, что после ее проведения зубы больше реагируют на горячее и холодное. Чтобы исправить это положение, теперь зубы покрывают специальным гелем, содержащим кальций фтор и фосфаты. Именно благодаря этому гелю на заключительном этапе чистки происходит моментальное снятие чувствительности.</p>
                </div>
            </div>
        </div>
    </div>
@stop