<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tabungan;

class TabunganController extends Controller
{
    //
public function index()
{
    $osis = osis::all();
    return $osis;

}
public function show ($id)
{
    $osis = osis::find($id);
    return $osis;
}
public function store($id=null,$nis=null,$nama=null,$kelas=null,$jumlah=null)
{
    $n = new osis();
    $osis->nama_lengkap = "nama lengkap";
    $osis->nis = "nis";
    $osis->ttl = "ttl";
    $osis->agama = "agama";
    $osis->alamat = "alamat";
    $osis->notel = "notel";
    $osis->kelas = "kelas";
    $osis-> = "";
    $osis-> = "";
    $osis-> = "";


    $osis->save();
    return $osis;
}
public function delete ($id){
    $tabungan = \App\Tabungan::find($id);
    $tabungan->delete();
    return $tabungan;
}
}
