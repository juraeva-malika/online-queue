    
<script src="{{asset("js/appointment-form.js")}}"></script>


@extends("admin.admin-layout")
    @section("content")
        <form method="post" action={{route("make-appointment")}}>
            @csrf
            <div class="row g-3">
                <div class="col-12 col-sm-6">
                    <input type="text" name="fullname" class="form-control border-0" value="{{$order->fullname}}" style="height: 55px;">
                </div>
                <div class="col-12 col-sm-6">
                    <input type="text" name="phone" class="form-control border-0" value="{{$order->phone}}" style="height: 55px;">
                </div>
                 <div class="col-12 col-sm-6">
                    <select  oninput="getDoctorsByService(event.target.value)" name="service_id" class="form-select border-0" style="height: 55px;" >
                        @foreach (App\Models\Service::get() as $service  )
                            <option value={{$service->id}} {{$order->service_id == $service->id ? "selected" : " "}}>{{$service->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-12 col-sm-6">
                    <select name="doctor_id" class="form-select border-0" style="height: 55px;">
                        <option selected>Выберите доктора</option>
                        @foreach(App\Models\Doctor::get() as $doctor)
                            <option value={{$doctor->id}} {{ $order->doctor_id == $doctor->id  ? "selected" : " "  }}>{{$doctor->fullname}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-12 col-sm-6">
                    <div oninput="getTime()" class="date" id="date" data-target-input="nearest"  style="position: relative">
                        <input type="date" autocomplete="off" name="date"
                            class="form-control border-0"
                            value="{{$order->date->format("Y-m-d")}}" data-target="#date"  style="height: 55px;">
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
                    <textarea name="details" class="form-control border-0" rows="5"value="{{$order->details}}"></textarea>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary w-100 py-3" type="submit">Изменить</button>
                </div>
            </div>
        </form>
    @stop

