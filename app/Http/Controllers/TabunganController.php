<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tabungan;

class TabunganController extends Controller
{
    //
public function index()
{
    $Tabungan = Tabungan::all();
    return $Tabungan;

}
public function show ($id)
{
    $Tabungan = Tabungan::find($id);
    return $Tabungan;
}
public function store($id=null,$nis=null,$nama=null,$kelas=null,$jumlah=null)
{
    $Tabungan = new Tabungan();
    $Tabungan->nis = "nis";
    $Tabungan->nama = "nama";
    $Tabungan->kelas = "kelas";
    $Tabungan->jumlah = "jumlah";
    $Tabungan->save();
    return $Tabungan;
}
public function delete ($id){
    $tabungan = \App\Tabungan::find($id);
    $tabungan->delete();
    return $tabungan;
}
}
