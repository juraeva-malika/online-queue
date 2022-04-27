<?
namespace App\Http\Controllers\Admin;

use App\Models\Doctor;
use App\Models\DoctorService;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class DoctorController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index(){
        return view("admin.doctors.index", ["doctors" => Doctor::all()]);
    }
    public function create(){
        return view("admin.doctors.create");
    }
    public function store(Request $request){
        // dd($request->input());
        $doctor= Doctor::create($request->input());
        foreach($request->input("service_ids") as $service_id){
            DoctorService::create(["doctor_id"=> $doctor->id, "service_id"=> $service_id]);
        }
        return redirect()->route('admin.doctor.index');
    }
    public function edit($id){
        return view("admin.doctors.edit",["doctor"=>Doctor::where("id", $id)->first()]);
    }
    public function update($id){
        $doctor = Doctor::where("id", $id)->first();
        $doctor->fullname=request()->input("fullname");
        $doctor->phone=request()->input("phone");
        DoctorService::where("doctor_id", $id)->delete();
        foreach(request()->input("service_ids") as $service_id){
            DoctorService::create(["doctor_id"=> $doctor->id, "service_id"=> $service_id]);
        }
        $doctor->save();
        return redirect()->route('admin.doctor.index');
    }
    public function destroy(){
        Doctor::where("id", request()->input("id"))->delete();
        return  redirect()->route("admin.doctor.index");
    }
}
