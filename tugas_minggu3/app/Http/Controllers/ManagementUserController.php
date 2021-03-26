<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagementUserController extends Controller{

    public function index(){
        $nama = "Priska Arlinda Sabillah";
        $pelajaran = ["workshop framework","workshop android"];
        return view('home', compact('nama', 'pelajaran'));
    }
    public function create(){
        return"methode ini nantinya akan digunakan untuk menampilkan untuk menampilkan form untuk menambahkan data user.";
    }
    public function store(Request $request){
        return "method ini nantinya akan digunkan untuk menciptakan data user yang baru";
    }
    public function show($id){
        return "method ini nantinya kan digunkan untuk mengambil satu data user dengan id=" . $id;
    }
    public function edit($id){
        return "method ini nantinya akan sigunakan untk menampilkan form untuk mengubah data edit dengan id=" . $id;
    }
    public function update(Request $request, $id){
        return "method ini nantinya akan digunakan untk mengubah data user dengan id=" . $id;
    }
    public function destroy($id){
        return "method ini nantinya digunakan untuk menghapus data user dengan id=" . $id;
    }
}