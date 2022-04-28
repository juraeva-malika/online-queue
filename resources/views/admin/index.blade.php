@extends("admin.admin-layout")


@section("content")
    <div class="wrapper">
        <h1>Incoming appointments:</h1>
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
                    @if($order->status == "waiting")
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
                                <a href="/admin/orders/approve?order_id={{$order->id}}" class="btn btn-info mr-3">Approve</a>
                                <a href="/admin/orders/reject?order_id={{$order->id}}" class="btn btn-warning mr-3">Reject</a>
                            </td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
    </div>
@stop