<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/






//route parameter
Route::get('biodata/{nama}/{alamat}/{sekolah}/{umur}',function($a,$b,$c,$d)
{
    return 'nama saya'.$a.
     '<br>alamat saya'.$b.
     '<br>sekolah saya'.$c.
     '<br>umur saya'.$d;
});

//route parameter
Route::get('pesanan/{silahkan_pesan}/{pilih_pesanan}',function($a,$b)
{
    return 'silahkan_pesan'.$a.
     '<br>pilih_pesanan'.$b;

});
