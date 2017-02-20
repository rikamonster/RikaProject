<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Request;
use App\Http\Controllers\Controller;
use Form;
use Html;
use Input;
use Redirect;
use View;
use App\Tunjangan_pegawai;
use App\Pegawai;
use App\Tunjangans;

class TunjanganPController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('Bendahara');
    }

    public function index()
    {
        $tp = Tunjangan_pegawai::all();
        return view('FTunjanganP.index',compact('tp'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tp = Tunjangans::all();
        $pegawai = Pegawai::all();
        return view('FTunjanganP.create',compact('tp','pegawai')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tp = $request::all();
        Tunjangan_pegawai::create($tp);
        return redirect('TunjanganP');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Tunjangan_pegawai::find($id);
        $tp = Tunjangans::all();
        $pegawai = Pegawai::all();
        return view('FTunjanganP.show',compact('data','tp','pegawai'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $data = Tunjangan_pegawai::find($id);
        $tp = Tunjangans::all();
        $pegawai = Pegawai::all();
        return view('FTunjanganP.edit',compact('data','tp','pegawai'));
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
        $dataUpdate = Request::all();
        $data = Tunjangan_pegawai::find($id);
        $data->update($dataUpdate);
        return redirect('TunjanganP');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tunjangan_pegawai::find($id)->delete();
        return redirect('TunjanganP');
    }
}
