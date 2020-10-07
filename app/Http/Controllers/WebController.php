<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\WebRepository;

class WebController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(WebRepository $data){
        $this->data=$data;
    }

    public function index()
    {
        $curses=$this->data->listCurses();

        $services=$this->data->listServices();
        $services_count=$this->data->serviceCount();

        $sliders=$this->data->listSliders();
        $sliders_count=$this->data->sliderCount();

        $specialities=$this->data->listSpecialities(8);

        return view('inicio')->with(compact('curses','sliders','sliders_count','services','services_count','specialities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function call_specilities($nick=null){
        if (!empty($nick)){
            $speciality_count=$this->data->nickspecialityCount($nick);
            $specialities=$this->data->nickSpecialities($nick);
            $curses=$this->data->list_curseSpeciality($nick);
            return view('especialidad')->with(compact('specialities','speciality_count','curses'));
        }else{
            $speciality_count=$this->data->specialityCount();
            $specialities=$this->data->listSpecialities(null);
            return view('especialidades')->with(compact('specialities','speciality_count'));
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function destroy($id)
    {
        //
    }
}
