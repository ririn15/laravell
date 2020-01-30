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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/testmodel', function () {
     $query = App\Post::all();
     return $query;
});
Route::get('/testmodel2', function () {
    $query = App\Post::find(1);
    return $query;
});
Route::get('/testmodel3', function () {
    $query = App\Post::where('title','like','%Contoh title 1%')->get();
    return $query;
});
Route::get('/testmodel4', function () {
    $query = App\Post::find(2);
    $query->title="Contoh title 2";
    $query->save();
    return $query;
});
Route::get('/testmodel5', function () {
    $query = App\Post::find(1);
    $query->delete();
});
Route::get('/testmodel6', function () {
    $query = App\Post;
    $query->title="Contoh title 4";
    $query->content = "lorem ipsum";
    $query->save();
    return $query;
});
Route::get('profil/2', function () {
    return 'Halo';
});
Route::get('profil/3', function () {
    return 'Halo';
});



Route::get('/testmodel4', function () {
    $query = App\Post::find(2);
    $query->title="Contoh title 2";
    $query->save();
    return $query;
});










//Route basic
Route::get('hallo',function()
{
    return 'hallo ini aplikasi laravel pertama saya'.
     '<br>laravel ini magical framework ';
});



//route parameter
Route::get('biodata/{nama}/{alamat}/{sekolah}/{umur}',function($a,$b,$c,$d)
{
    return 'nama saya'.$a.
     '<br>alamat saya'.$b.
     '<br>sekolah saya'.$c.
     '<br>umur saya'.$d;
});

//route optional parameter
Route::get('pesan/{a?}/{b?}',function($mnm=null, $harga=null){
    if(isset($mnm)){
        $mnm = "anda memesan $mnm<br>";
        echo $mnm;
    }


    if(isset($harga)){
        $harga = "dengan harga $harga<br>";
        echo $harga;
    }

    if (!$mnm && !$harga)
   return "anda belum memesan sesuatu";
    if ($harga == 25000) {
        echo "anda memesan minuman dengan ukuran medium";
    }if ($harga== 35000) {
        echo"Anda memesan minuman dengan ukuran large";
    }if ($harga < 25000) {
        echo "anda memesan minuman dengan ukuran small";
    }

});


//route optional parameter
Route::get('TNI/{a?}/{b?}/{c?}',function($nama=null, $bb=null, $umur=null){
    if(isset($nama)){
        $nama = "nama saya $nama<br>";
        echo $nama;

    if(isset($bb)){
        $bb = " berat badan saya $bb<br>";
        echo $bb;
    }
    if(isset($umur)){
        $umur = "dan umur saya  $umur<br>";
        echo $umur;
    }

     if ($bb ==  76 && $bb <=100 ) {
         echo "anda harus turun berat badan";
     }if ($bb ==  65  && $bb <= 75) {
         echo"berat badan anda ideal";
        }if ($bb==  50  && $bb <= 64) {
            echo"naikan berat badan anda";
     }if ($bb < 50) {
         echo "anda kurang nutrisi";

      } if ($umur ==   30  && $umur <= 40) {
        echo " perwira";
    }if ($umur ==  40  && $umur <= 50) {
        echo" laksamana";
       }if ($umur ==  50  && $umur <= 60) {
           echo"jendral";

       }
    }
});


Route::get('testmodel/1',function()
{
    // select * from posts
    $query = App\Post::all();
    return $query;
});


Route::get('testmodel/2',function()
{
    // select * from posts
    $query = App\Post::find(1);
    return $query;
});

Route::get('testmodel/3',function()
{
    // select * from posts
    $query = App\Post::where('title','like','%cepat nikah%')->get();
    return $query;
});

Route::get('testmodel/4',function()
{
    // select * from posts
    $post = App\Post::find(1);
    $post->title = "Ciri Keluarga Sakinah";
    $post->save();
    return $post;
});

Route::get('testmodel/5',function()
{
    // select * from posts
    $post = App\Post::find(1);
    $post->delete();
});

Route::get('testmodel/6',function()
{
    // select * from posts
    $post = new App\Post;
    $post->title = "7 Amalan Pembuka Jodoh";
    $post->content = "shalat malam, sedekah, puasa sunah, silaturahmi, senyum, doa, tobat";
    $post->save();
    return $post;
});


Route::get('first',function(){
    $data = App\Biodata::select('id','nama','hobi')
    ->first();
    return $data;
});


Route::get('tiga',function()
{
    // select * from posts
    $query = App\Biodata::all()
    ->take(3);
    ;
    return $query;
});

Route::get('input/{nis}/{nama}/{alamat}/{jenis_kelamin}/{tempat_lahir}/{tanggal_lahir}/{hobi}',function($nis,$nama,$alamat,$jenis_kelamin,$tempat_lahir,$tanggal_lahir,$hobi)
{
    $data = new App\Biodata;
    $data->nis = $nis;
    $data->nama = $nama;
    $data->alamat = $alamat;
    $data->jenis_kelamin = $jenis_kelamin;
    $data->tempat_lahir = $tempat_lahir;
    $data->tanggal_lahir = $tanggal_lahir;
    $data->hobi = $hobi;
    $data->save();
    return $data;
});

Route::get('latihan','LatihanController@halo');
Route::get('tambah/{a?}/{b?}','LatihanController@tambah');
Route::get('kurang/{a?}/{b?}','LatihanController@kurang');
Route::get('kali/{a?}/{b?}','LatihanController@kali');
Route::get('bagi/{a?}/{b?}','LatihanController@bagi');
Route::get('pertambahan/{a?}/{b?}','LatihanController@pertambahan');
Route::get('pengurangan/{a?}/{b?}','LatihanController@pengurangan');
Route::get('perkalian/{a?}/{b?}','LatihanController@perkalian');
Route::get('pembagian/{a?}/{b?}','LatihanController@pembagian');
Route::get('data-1','LatihanController@loop');
Route::get('data-2','LatihanController@data');

//CRUD TABUNGAN
Route::get('Tabungan','TabunganController@index');
Route::get('Tabungan/{$id}','TabunganController@show');
Route::get('Tabungan-tambah/{nis}/{nama}/{kelas}/{jumlah}','TabunganController@store');
Route::get('Tabungan-update/{id}/{nis}/{nama}/{kelas}/{jumlah}','TabunganController@edit');

//passing data
Route::get('pass','PracticeController@pass');
Route::get('pass1','PracticeController@pass1');
Route::get('pass-tabungan','PracticeController@pass2');
