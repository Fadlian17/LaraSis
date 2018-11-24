<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
use App\Kelas;

class SiswaController extends Controller
{
    function index(){
    	$data['siswa'] = Siswa::all();
    	return view('siswa.index')->with($data);
    }
    function add(){
    	return view('siswa.add');
    }
    function save(Request $r){
    	$siswa = new Siswa;
    	$siswa->NIS = $r->input('NIS');
    	$siswa->Nama = $r->input('Nama');
    	$siswa->Kelas = $r->input('Kelas');
    	$siswa->Jurusan = $r->input('Jurusan');
    	$siswa->save();
    	return redirect(url('siswa'));
    }
    function edit($id){
    	$data['siswa'] = Siswa::find($id);
    	return view('siswa.edit')->with($data);
    }
    function update(Request $r, $id){
    	$siswa = Siswa::find($id);
    	$siswa->NIS = $r->input('NIS');
    	$siswa->Nama = $r->input('Nama');
    	$siswa->Kelas = $r->input('Kelas');
    	$siswa->Jurusan = $r->input('Jurusan');
    	$siswa->save();
    	return redirect(url('siswa'));
    }
    function delete($id){
    	Siswa::find($id)->delete();
    	return redirect(url('siswa'));   
    	 }
}
