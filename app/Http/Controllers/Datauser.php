<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data_user;

class Datauser extends Controller
{
    public function index()
    {
        $data = Data_user::all();

        return view("home",['data' => $data]);
    }
    public function tambah_data()
    {
        
        return view("tambah_data");
    }
    public function aksi_tambah_data(Request $request)
    {

        $nama = strtoupper($request->nama);
        $age = $request->age;
        $city =strtoupper($request->city);

        Data_user::create([
            'nama' => $nama,
            'age' => $age,
            'city' =>  $city,
        ]);
        return redirect('/');
    }
    public function edit_data($id)
    {
        $data =  Data_user::where('id',  $id)->first();
        return view("edit_data",['data' => $data]);
    }

    public function aksi_edit_data(Request $request)
    {

        $nama = strtoupper($request->nama);
        $age = $request->age;
        $city =strtoupper($request->city);

        Data_user::where('id',  $request->id)->update([
            'nama' => $nama,
            'age' => $age,
            'city' => $city,
            ]);
            return redirect('/');
    }

    public function hapus_data($id){

        $lokasi = Data_user::find($id);
        $lokasi->delete();
        return redirect()->back();
    }
}
