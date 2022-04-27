@extends("admin.admin-layout")
@section("content")
    <form action="" method="POST" >
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="fullname" class="form-control" placeholder="">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Phone:</strong>
                    <input type="text" name="phone" class="form-control" placeholder="">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                    <label for="exampleFormControlSelect2">Doctor's Services:</label>
                    <select name="service_ids[]" multiple="multiple"  class="form-control" id="exampleFormControlSelect2">
                        @foreach (App\Models\Service::get() as $service  )
                        <option value={{$service->id}}>
                        {{$service->name}}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@stop