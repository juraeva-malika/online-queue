@extends("admin.admin-layout")
@section("content")
    <form method="POST">
        @csrf
        <div class="form-group">
            <label for="example">Fullname</label>
            <input type="text" name="fullname" class="form-control" id="example" value={{$doctor->fullname}} placeholder="">
        </div>
        <div class="form-group">
            <label for="example2">Phone number</label>
            <input type="text" name="phone" class="form-control" id="example2" placeholder="" value={{$doctor->phone}}>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                    <label for="exampleFormControlSelect2">Doctor's Services:</label>
                    <select name="service_ids[]" multiple="multiple"  class="form-control" id="exampleFormControlSelect2">
                        @foreach (App\Models\Service::get() as $service  )
                        <option value={{$service->id}} {{ $doctor->services->firstWhere("id",$service->id) ? "selected" :""  }}>
                        {{$service->name}}
                            </option>
                        @endforeach
                    </select>
                </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
@stop