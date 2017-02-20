<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Form;
use Html;
use Input;
use Redirect;
use View;
use App\User;
use App\Pegawai;
use App\Golongan;
use App\Jabatan;
use File;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
class PegawaiController extends Controller
{
    use RegistersUsers;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function __construct()
    {
        $this->middleware('HRD');
    }

    public function index()
    {
        $pegawai = Pegawai::all();
        return view('FPegawai.index',compact('pegawai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::all();
        $golongan = Golongan::all();
        $jabatan = Jabatan::all();
        return view('FPegawai.create',compact('user','golongan','jabatan')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'Nip' => 'required|numeric|min:3|unique:pegawais,Nip',
            'email' => 'required|email|max:100|unique:users',
            'password' => 'required|min:6|confirmed',
            'permission' => 'required|max:255',
            
            ]);

        $user = User::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'permission' => $request->get('permission'),
            'password' => bcrypt($request->get('password')),
            
        ]);

        $pegawai = new Pegawai;
        $pegawai->Nip = $request->get('Nip');
        $pegawai->jabatan_id = $request->get('jabatan_id');
        $pegawai->golongan_id = $request->get('golongan_id');
        $pegawai->user_id = $user->id;

        if($request->hasFile('Photo')){

        $file = $request->file('Photo');
        $extension = $file->getClientOriginalExtension();
        $filename = md5(time()).'.'.$extension;
        $destinationPath = public_path().DIRECTORY_SEPARATOR.'/image/';
        $file->move($destinationPath,$filename); 
        $pegawai->Photo = $filename;
        $pegawai->save();
    }
        return redirect('Pegawai');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Pegawai::find($id);
        $golongan = Golongan::all();
        $jabatan = Jabatan::all();
        return view('FPegawai.show',compact('data','user','golongan','jabatan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        
        $data = Pegawai::find($id);
        $golongan = Golongan::all();
        $jabatan = Jabatan::all();
        return view('FPegawai.edit',compact('data','golongan','jabatan'));
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

        
        
        $pegawai = Pegawai::find($id);
        $pegawai->Nip = $request->get('Nip');
        $pegawai->jabatan_id = $request->get('jabatan_id');
        $pegawai->golongan_id = $request->get('golongan_id');

        if($request->hasFile('Photo')){

        $filename = null;
        $file = $request->file('Photo');
        $extension = $file->getClientOriginalExtension();
        $filename = md5(time()).'.'.$extension;
        $destinationPath = public_path().DIRECTORY_SEPARATOR.'/image/';
        $file->move($destinationPath,$filename); 
       //hapus cover lama , jika

        if ($pegawai->Photo) {
            $old_photo = $pegawai->Photo;
            $filepath = public_path().DIRECTORY_SEPARATOR.'/image/'.DIRECTORY_SEPARATOR.$pegawai->Photo;
            try {
                File::delete($filepath);
                    } 
                    catch (FileNotFoundExpetion $e) {
                        
                    }        
                }
        $pegawai->Photo = $filename;
        $pegawai->save(); 
    }
        
        
        return redirect('Pegawai');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pegawai::find($id)->delete();
        return redirect('Pegawai');
    }
}
