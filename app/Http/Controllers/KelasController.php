<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kelas;
use App\Jurusan;

class KelasController extends Controller
{
   	function index(){
    	$data['kelas'] = Kelas::all();
    	return view('kelas.index')->with($data);
    }
    function add(){
    	return view('kelas.add');
    }
    function save(Request $r){
    	$kelas = new Kelas;
    	$kelas->Jurusan = $r->input('Jurusan');
    	$kelas->Kelas = $r->input('Kelas'); 	
    	$kelas->save();
    	return redirect(url('kelas'));
    }
    function edit($id){
    	$data['kelas'] = Siswa::find($id);
    	return view('kelas.edit')->with($data);
    }
    function update(Request $r, $id){
    	$kelas = Kelas::find($id);
    	$kelas->Jurusan = $r->input('Jurusan');
    	$kelas->Kelas = $r->input('Kelas'); 	
    	$kelas->save();
    	return redirect(url('siswa'));
    }
    function delete($id){
    	Kelas::find($id)->delete();
    	return redirect(url('kelas'));   
    	 }
}
