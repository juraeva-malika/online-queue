{{-- @php
    
echo $doctors[0]->fullname
@endphp --}}
@extends("admin.admin-layout")
@section("content")
     <div class="wrapper">
        <a href="/admin/orders/create" class="btn btn-info my-3 create" style="float:right">Create</a>
        <table class="table table-striped">
            <thead class="thead-light">
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">fullname</th>
                    <th scope="col">phone</th>
                    <th scope="col">doctor's name</th>
                    <th scope="col">service's name</th>
                    <th scope="col">date</th>
                    <th scope="col">time</th>
                    <th scope="col">details</th>
                    <th scope="col">status</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order )
                    <tr>
                        <th scope="row">{{$order->id}}</th>
                        <td>{{$order->fullname}}</td>
                        <td>{{$order->phone}}</td>
                        <td>{{$order->doctor->fullname}}</td>
                        <td>{{$order->service->name}}</td>
                        <td>{{$order->date}}</td>
                        <td>{{$order->time}}</td>
                        <td>{{$order->details}}</td>
                        <td>{{$order->status}}</td>
                        <td>
                            <a href="/admin/orders/edit/{{$order->id}}" class="btn btn-secondary mr-3">Edit</a>
                            <form action="/admin/orders?id={{$order->id}}" method="post" style="display:inline;">
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
