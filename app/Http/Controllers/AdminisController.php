<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Models\Administrator;

class AdminisController extends Controller
{
    //
    function show(){
        // $data['_administrators'] = Administrator::cursorPaginate(5);
        $data['_administrators'] = Administrator::all();
        return view('administrator',$data);
    }

    function add(){
        $data=[
            'action'=>url('administrator/create'),
            'tombol'=>'Simpan',
            '_administrators'=>(object)[
                'id_karyawan'=>'',
                'nama_karyawan'=>'',
                'tm'=>'',
                'jk'=>'',
                'alamat'=>'',
                'nohp'=>'',
                'jabatan'=>'',
                'foto'=>'',
            ]
            ];
        return view('formadm',$data);
    }

    function create(Request $req){
        Administrator::create([
            'id_karyawan' => $req->id_karyawan,
            'nama_karyawan' => $req->nama_karyawan,
            'tm' => $req->tm,
            'jk' => $req->jk,
            'alamat' => $req->alamat,
            'nohp' => $req->nohp,
            'jabatan' => $req->jabatan,
            'foto' => $req->file('foto')->store('foto')
        ]);
         return redirect('administrator');

    }
     function hapus($id_karyawan){
        $_administrators = Administrator::where('id_karyawan', $id_karyawan)->delete();
        return redirect('administrator');
     }

     function edit($id_karyawan){
        $data['_administrators'] = Administrator::find($id_karyawan);
        $data['action'] = url('administrator/update'). '/' .$data['_administrators']->id_karyawan;
        $data['tombol'] = 'Update';

        return view('formadm', $data);
    }
    
    function update(Request $req){
        Administrator::where('id_karyawan',$req->id_karyawan)->update([
            'id_karyawan' => $req->id_karyawan,
            'nama_karyawan' => $req->nama_karyawan,
            'tm' => $req->tm,
            'jk' => $req->jk,
            'alamat' => $req->alamat,
            'nohp' => $req->nohp,
            'jabatan' => $req->jabatan,
            'foto' => $req->file('foto')->store('foto')

        ]);
        return redirect('administrator');
       }

         function cari(Request $req){

        $data['_administrators'] = Administrator::where('id_karyawan','like',$req->cari. "%")
        ->orwhere('nama_karyawan','like',$req->cari. "%")
        ->orwhere('tm','like',$req->cari. "%")
        ->orwhere('alamat','like',$req->cari. "%")
        ->orwhere('nohp','like',$req->cari. "%")
        ->orwhere('jabatan','like',$req->cari. "%")
        ->paginate();

        $data['cari'] = $req->cari;
        return view('administrator',$data);
      }
}
