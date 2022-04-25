@extends("admin.admin-layout")
@section("content")
    <div class="wrapper">
        <a href="/admin/doctors/create" class="btn btn-info my-3 create" style="float:right">Create</a>
        <table class="table table-striped">
            <thead class="thead-light">
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">fullname</th>
                    <th scope="col">phone</th>
                    <th scope="col">services</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($doctors as $doctor )
                    <tr>
                        <th scope="row">{{$doctor->id}}</th>
                        <td>{{$doctor->fullname}}</td>
                        <td>{{$doctor->phone}}</td>
                        <td>
                        @foreach ($doctor->services  as $service  )
                            {{$service->name}}
                        @endforeach
                        </td>
                        <td>
                            <button class="btn btn-secondary mr-3">Edit</button>
                            <button class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop