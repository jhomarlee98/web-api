<?php
namespace App\Repositories;

use App\Models\{Curse,Slider,Speciality,SpecialityCurse,Service};
use Illuminate\Support\Facades\DB;
use function GuzzleHttp\Promise\all;

class WebRepository
{
    public function listCurses()
    {
        return Curse::where('state','active')
        ->orderBy('cod', 'asc')->get();
    }
    public function curse($nick){
        return Curse::where('nick',$nick)
            ->get();
    }

    public function listSpecialities($count){
        return Speciality::where('state','active')
            ->orderBy('cod','asc')
            ->limit($count)
            ->get();
    }
    public function nickSpecialities($nick){
        return Speciality::where('state','active')
            ->where('nick',$nick)
            ->get();
    }
    public function specialityCount(){
        return Speciality::where('state','active')
            ->count();
    }
    public function nickspecialityCount($nick){
        return Speciality::where('state','active')
            ->where('nick',$nick)
            ->count();
    }

    public function list_curseSpeciality($nick){
        return DB::select('call curse_by_speciality(?)',[$nick]);
    }


    public function listSliders(){
        return Slider::where('state','active')
            ->orderBy('cod','asc')->get();
    }
    public function sliderCount(){
        return Slider::where('state','active')
            ->count();
    }
    public function listServices(){
        return Service::where('state','active')
            ->orderBy('position','asc')->get();
    }
    public function serviceCount(){
        return Service::where('state','active')
            ->count();
    }
}

