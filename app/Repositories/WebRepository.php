<?php
namespace App\Repositories;

use App\Models\{Curse,Slider,Speciality,SpecialityCurse,Service};

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

    public function listSpecialities(){
        return Speciality::where('state','active')
            ->orderBy('cod','asc')
            ->limit(8)
            ->get();
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

