<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jurusan;
use App\Kelas;

class JurusanController extends Controller
{
    function index(){
    	$data['jurusan']=Jurusan::all();
    	return view('jurusan.index')->with($data);
    }

    function add(){
    	return view('jurusan.add');
    }

    function save(Request $r){
    	$jurusan = new Jurusan;
    	$jurusan->Nama =$r->input('Nama');
    	$jurusan->Jumlah_siswa = $r->input('Jumlah_siswa');
    	$jurusan->Kajur = $r->input('Kajur');
    	$jurusan->save();
    	return redirect(url('jurusan'));
    }

    function edit($id){
    	$data['jurusan']=Jurusan::find($id);
    	return view('jurusan.edit')->with($data);
    }

    function update(Request $r, $id){
    	$jurusan = new Jurusan;
    	$jurusan->Nama =$r->input('Nama');
    	$jurusan->Jumlah_siswa = $r->input('Jumlah_siswa');
    	$jurusan->Kajur = $r->input('Kajur');
    	$jurusan->save();
    	return redirect(url('jurusan'));
    }

    function delete($id){
    	Jurusan::find($id)->delete();
    	return redirect(url('jurusan'));
    }
}
