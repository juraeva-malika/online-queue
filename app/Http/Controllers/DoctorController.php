<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use \Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class DoctorController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
        return view("doctor.index",["doctors" => Doctor::all()]);
    }
    public function create(){
        return view("doctor.create",);
    }
    public function store(Request $request){
        // dd($request->input());
        Doctor::create($request->input());
        return redirect()->route('doctor.index');
    }

    
}
