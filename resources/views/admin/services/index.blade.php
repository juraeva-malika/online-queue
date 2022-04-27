@extends("admin.admin-layout")
@section("content")
    <div class="wrapper">
        <a href="/admin/services/create" class="btn btn-info my-3 create" style="float:right">Create</a>
        <table class="table table-striped">
            <thead class="thead-light">
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">name</th>
                    <th scope="col">time</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($services as $service )
                    <tr>
                        <th scope="row">{{$service->id}}</th>
                        <td>{{$service->name}}</td>
                        <td>{{$service->time}}</td>
                        <td>
                            <a href="/admin/services/edit/{{$service->id}}" class="btn btn-secondary mr-3">Edit</a>
                            <form method="post" action="/admin/services?id={{$service->id}}" style="display:inline;">
                                @csrf
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                            
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop