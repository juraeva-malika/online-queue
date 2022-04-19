<!-- Appointment Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="d-inline-block border rounded-pill py-1 px-4">Appointment</p>
                    <h1 class="mb-4">Онлайн запись к врачу</h1>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                    <div class="bg-light rounded d-flex align-items-center p-5 mb-4">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white" style="width: 55px; height: 55px;">
                            <i class="fa fa-phone-alt text-primary"></i>
                        </div>
                        <div class="ms-4">
                            <p class="mb-2">Свяжитесь с нами</p>
                            <h5 class="mb-0">+998 71 265 89 59</h5>
                        </div>
                    </div>
                    <div class="bg-light rounded d-flex align-items-center p-5">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white" style="width: 55px; height: 55px;">
                            <i class="fa fa-envelope-open text-primary"></i>
                        </div>
                        <div class="ms-4">
                            <p class="mb-2">Отправьте сообщение</p>
                            <h5 class="mb-0">info@example.com</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <script>
                          function handleInput(){
                              fetch("/get-time").then(async c => {
                                   console.log(await c.json()) 
                              })
                          }
                        </script>

                    <div class="bg-light rounded h-100 d-flex align-items-center p-5">
                        <form method="post" action={{route("make-appointment")}}>
                            @csrf
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" name="fullname" class="form-control border-0" placeholder="Полное имя" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                     <input type="text" name="phone" class="form-control border-0" placeholder="Номер телефона" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <select name="doctor_id" class="form-select border-0" style="height: 55px;">
                                        <option selected>Выберите доктора</option>
                                        <option value="1">Alimov Jasur</option>
                                        <option value="2">Venera Rafkatovna</option>
                                        <option value="3">Maklakova Elena</option>
                                        <option value="4">Umida Abdullayevna</option>
                                        <option value="5">Sevilya Rafikovna</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <select name="service_id" class="form-select border-0" style="height: 55px;">
                                        <option selected>Выберите услугу</option>
                                        <option value="1">Implantology</option>
                                        <option value="2">Surgery</option>
                                        <option value="3">Therapy</option>
                                        <option value="4">Restoration</option>
                                        <option value="5">Orthodontics</option>
                                        <option value="6">Orthopedics</option>
                                        <option value="7">Childrens doctor</option>
                                        <option value="8">Hygiene</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="date" id="date" data-target-input="nearest">
                                        <input type="text" name="date"
                                            class="form-control border-0 datetimepicker-input"
                                            placeholder="Выберите дату" data-target="#date" data-toggle="datetimepicker" style="height: 55px;">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="time" id="time" data-target-input="nearest">
                                        <input type="text" name="time"
                                            class="form-control border-0 datetimepicker-input"
                                            placeholder="Выберите время" data-target="#time" data-toggle="datetimepicker" style="height: 55px;">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <textarea name="details" class="form-control border-0" rows="5" placeholder="Опишите что вас беспокоит"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Записаться</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Appointment End -->