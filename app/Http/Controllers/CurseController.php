<?php

namespace App\Http\Controllers;

use App\Models\Curse;
use Illuminate\Http\Request;
use App\Repositories\WebRepository;


class CurseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(WebRepository $data)
    {
        $this->data=$data;
    }

    public function index()
    {
        //
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
     * @param  \App\Models\Curse  $curse
     * @return \Illuminate\Http\Response
     */
    public function call_name($nick ){
        $curses=$this->data->curse($nick);
        return view('curso')->with(compact('curses'));
    }
    public function show(Curse $curse)
    {


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Curse  $curse
     * @return \Illuminate\Http\Response
     */
    public function edit(Curse $curse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Curse  $curse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Curse $curse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Curse  $curse
     * @return \Illuminate\Http\Response
     */
    public function destroy(Curse $curse)
    {
        //
    }
}
