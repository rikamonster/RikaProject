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
use App\kategori_lembur;
use App\Pegawai;
use App\Lembur_pegawai;

class LemburController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
       public function __construct()
    {
        $this->middleware('Admin');
    }
    
    public function index()
    {
        $lembur = Lembur_pegawai::all();
        return view('FLembur.index',compact('lembur'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = kategori_lembur::all();
        $pegawai = Pegawai::all();
        return view('FLembur.create',compact('kategori','pegawai')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lembur = $request::all();
        Lembur_pegawai::create($lembur);
        return redirect('Lembur');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Lembur_pegawai::find($id);
        $kategori = kategori_lembur::all();
        $pegawai = Pegawai::all();
        return view('FLembur.show',compact('data','kategori','pegawai'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Lembur_pegawai::find($id);
        $kategori = kategori_lembur::all();
        $pegawai = Pegawai::all();
        return view('FLembur.edit',compact('data','kategori','pegawai'));
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
        $data = Lembur_pegawai::find($id);
        $data->update($dataUpdate);
        return redirect('Lembur');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Lembur_pegawai::find($id)->delete();
        return redirect('Lembur');
    }
}
