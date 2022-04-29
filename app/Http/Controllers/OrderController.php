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
        $appointment = Order::create(array_merge($request->input(), ["status"=>Order::WAITING]));
        return redirect()->route("admin.order.index");

    }

    public function getDoctorsByService(Request $request){
        $service = Service::where("id", $request->input("service_id"))->first();
        return response()->json($service->doctors);
    }

    function generateScheduleTimesArray(){
        $free_times=[];
        $count = 0;
        $time = 9;
        for ($i=0; $i < 48 ; $i++) { 
            $minutes = 15 * $count;
            if($count == 4){
                $count = 0;
                $time = $time + 1;
                $free_times[($time.":00")] = "free";
            }else{
                $free_times[($time < 10 ? "0".$time : $time ).":". ($i == 0 ? "00" : $minutes)] = "free";
            }
            $count++;
        }
        return $free_times;
    }

    function generateBusyTimesArray(Array $array){
        $newArray = [];
        foreach($array as $key => $value )  {
            for ($i=0; $i < $value ; $i++) { 
                $timeArray = explode(":",$key);
                $time = Carbon::createFromTime($timeArray[0],$timeArray[1]);
                $time->addMinute(15*$i);
                $newArray[$time->format("H:i")] = "busy";
            }
        }
        
        
        return $newArray;
    }

    public function getTime(Request $request)
    {  
        $service = Service::where("id",$request->query("service_id"))->first();
        $service->time;
        $scheduleTimes = $this->generateScheduleTimesArray();
       
        $orders = Order::where("doctor_id",$request->query("doctor_id"))
        ->whereDate("date", Carbon::createFromFormat("Y-m-d",$request->query("date")) )
        ->with("service")
        ->get()->pluck("service.time",'time')
        ;   
        $busyTimes = $this->generateBusyTimesArray($orders->toArray());
        // $busyTimes = $this->generateBusyTimesArray([ "9:00"=>4, "16:15" => 2,  "17:15"=>4 ]);

        $doctorSchedule = collect($scheduleTimes)->merge($busyTimes);
        
        $free_times = collect();
        $current_time="";
        
        $compositeCounts = 1;
        foreach($doctorSchedule as $key => $value){
            if($value == "busy") {
                $compositeCounts = 1;
                $current_time="";
                continue;
            };
            
            if(empty($current_time)){
                $current_time= $key;
            }

            if($compositeCounts == $service->time  ){
                $free_times->add($current_time);
                $current_time = "";
                $compositeCounts = 1;
            }else{
                $compositeCounts++;
            }
         
        }
        // dd($free_times,$doctorSchedule);

        // dd($service->time, $doctorSchedule);

        
        // dd($request->query(),$service->time,$orders->toArray(),$scheduleTimes);
        $times = $free_times->map(function($key,$value){
             return $key;   
        });
        return response()->json($times);
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
        return view("admin.orders.edit", ["order" => Order::where("id", $id)->first()]);
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
        $order = Order::where("id", $id)->first();
        $order->update($request->input());
        // $order->fullname = $request->input("fullname");
        // $order->phone = $request->input("phone");
        // $order->date = $request->input("date");
        // $order->time = $request->input("time");
        // $order->details = $request->input("details");
        // $order->date = $request->input("date");
        
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
    public function approve(){
        Order::where("id", request()->input("order_id"))->update(["status"=> Order::APPROVED]);
        return redirect()->route("admin.index");
    }
    public function reject(){
        Order::where("id", request()->input("order_id"))->update(["status"=> Order::CANCELED]);
        return redirect()->route('admin.index');
    }
}
