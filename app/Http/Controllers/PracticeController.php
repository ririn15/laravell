<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tabungan;
class PracticeController extends Controller
{
    //
    Public Function pass()
    {
        $data = "Reza Okto Maniani";
        return view('latihan',compact('data'));

    }
    public function pass1()
    {
        $siswa = [
            ['nama'=>'kasman','kelas'=>'XI RPL 1'],
            ['nama'=>'kisman','kelas'=>'XI RPL 2'],

        ];
        return view ('latihan',['data'=>$siswa]);
    }
    public function pass2()
    {
        $tabungan = Tabungan::all()->take(10);
        return view('latihan2',compact('tabungan'));
    }
}
