 <script>
    function handleInput(){
        fetch("/get-time").then(async c => {
             let freeTimes= await c.json();
             let timeElement=document.querySelector("[name=\"time\"]");
             timeElement.innerHTML="";
             for(freeTime of freeTimes){
                 let option= document.createElement("option");
                 option.value= freeTime;
                 option.innerText= freeTime;
                 timeElement.appendChild(option);
             }
        })
    }
</script>


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
                                        @foreach(App\Models\Doctor::get() as $doctor)
                                            <option value={{$doctor->id}}>{{$doctor->fullname}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <select name="service_ids[]" class="form-select border-0" style="height: 55px;">
                                        @foreach (App\Models\Service::get() as $service  )
                                            <option value={{$service->id}}>{{$service->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div oninput="handleInput()" class="date" id="date" data-target-input="nearest"  style="position: relative">
                                        <input type="text" autocomplete="off" name="date"
                                            class="form-control border-0 datetimepicker-input"
                                            placeholder="Выберите дату" data-target="#date" data-toggle="datetimepicker" style="height: 55px;">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="time" id="time" data-target-input="nearest"  style="position: relative">
                                        <select type="text" autocomplete="off" name="time"
                                            class="form-control border-0"
                                            placeholder="Выберите время" data-target="#time" style="height: 55px;"></select>
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

