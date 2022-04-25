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
        return view("admin.doctors.create",);
    }
    public function store(Request $request){
        // dd($request->input());
        $doctor= Doctor::create($request->input());
        foreach($request->input("service_ids") as $service_id){
            DoctorService::create(["doctor_id"=> $doctor->id, "service_id"=> $service_id]);
        }
        return redirect()->route('admin.doctor.index');
    }
}
