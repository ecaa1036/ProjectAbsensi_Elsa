<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Absensi;

class AbsensiController extends Controller
{
    //
     function show(){
        $data['_absensi'] = Absensi::all();
        return view('absensi',$data);
    }

    function add(){
        $data=[
            'action'=>url('absensi/create'),
            'tombol'=>'Simpan',
            '_absensi'=>(object)[
                'nama' =>'',
                'tanggal' =>'',
                'pukul' =>'',
                'keterangan' =>'',
            
            ]
            ];
        return view('formabsensi',$data);
    }

    function create(Request $req){
        Absensi::create([
            'nama' => $req->nama,
            'tanggal' => $req->tanggal,
            'pukul' => $req->pukul,
            'keterangan' => $req->keterangan
        ]);
     return redirect('absensi');

    }
     function hapus($id){
        $_absensi = Absensi::where('id', $id)->delete();
        return redirect('absensi');
     }

     function edit($id){
        $data['_absensi'] = Absensi::find($id);
        $data['action'] = url('absensi/update'). '/' .$data['_absensi']->id;
        $data['tombol'] = 'Update';

        return view('formabsensi', $data);
    }
    
    function update(Request $req){
        Absensi::where('id',$req->id)->update([
            'nama' => $req->nama,
            'tanggal' => $req->tanggal,
            'pukul' => $req->pukul,
            'keterangan' => $req->keterangan

        ]);
        return redirect('absensi');
       }

}
