@extends("admin.admin-layout")
@section("content")
    <form method="post">
        @csrf
        <div class="form-group">
            <label for="example">Name</label>
            <input type="text" name="name" class="form-control" id="example" value={{$service->name}}>
        </div>
        <div class="form-group">
            <label for="example2">Time</label>
            <input type="text" name="time" class="form-control" id="example2" value={{$service->time}}>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
@stop