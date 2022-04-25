<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Service;
use Carbon\Carbon;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return view("admin.orders.index", ["orders"=>Order::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.orders.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->input());
        $appointment = Order::create($request->input());
    }


    public function getTime(Request $request)
    {
        // $time = "30";   
        // $service = Service::where("id",$request->query("service_id"))->first();
        // $service1 = 1; //15 min
        // $service2 = 2; //30 min
        // $service4 = 4; //1 hour
        // $service6 = 6; //1:30 hours
        // $service8 = 8; //2 hours
        // $free_times=collect();
        // $count = 0;
        // $time = 9;
        // for ($i=0; $i < 48 ; $i++) { 
            
            
        //     $minutes = 15 * $count;
        //     if($count == 4){
        //         $count = 0;
        //         $time = $time + 1;
        //         $free_times->add($time.":00");
        //     }else{
        //         $free_times->add($time.":". ($i == 0 ? "00" : $minutes));
        //     }
            
        //     $count = $count + 1;
        // }
        // $orders = Order::where("doctor_id",$request->query("doctor_id"))
        // ->whereDate("date", Carbon::createFromFormat("m/d/Y",$request->query("date")) )
        // ->with("service")
        // ->get()->pluck("service.time",'time')
        // ;   

        // dd($request->query(),$service->time,$orders->toArray(),$free_times);
        return response()->json([ "9:00","10:00","16:00"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        Order::where("id",request()->input("id"))->delete();
        return redirect()->route("admin.order.index");
        
    }
}
