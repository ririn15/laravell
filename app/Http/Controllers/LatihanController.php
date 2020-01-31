<?php
namespace App\Http\Controllers;
use Illuminate\Database\Seeder;

class LatihanController extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function Halo() {
      return 'Halo, Nama saya Ririn'

    }
    public function tambah ($a = 0, $b = 0){
        $c = $a + $b;
        return $a.' + '.$b.' = '.$c;
    }
    public function kurang ($a = 0, $b = 0){
        $c = $a - $b;
        return $a.' - '.$b.' = '.$c;
    }
    public function kali ($a = 0, $b = 0){
        $c = $a * $b;
        return $a.' * '.$b.' = '.$c;
    }
    public function bagi ($a = 0, $b = 0){
        $c = $a / $b;
        return $a.' / '.$b.' = '.$c;
    }
    public function pertambahan ($a = null, $b = null){
       if ($a && $b){
        $c = $a + $b;
        echo $a.' + '.$b.' = '.$c;
    }

    elseif (isset($a)){
        $keta = 'masukan satu angka lagi';
        echo $keta;
    }  if (!$a && !$b){
        return 'masukan angka terlebih dahulu';
    }
}
public function pengurangan ($a = null, $b = null){
    if ($a && $b){
     $c = $a - $b;
     echo $a.' - '.$b.' = '.$c;
 }
 elseif (isset($a)){
    $keta = 'masukan satu angka lagi';
    echo $keta;
}  if (!$a && !$b){
    return 'masukan angka terlebih dahulu';
}
}
public function perkalian ($a = null, $b = null){
    if ($a && $b){
     $c = $a * $b;
     echo $a.' * '.$b.' = '.$c;
 }
 elseif (isset($a)){
    $keta = 'masukan satu angka lagi';
    echo $keta;
}  if (!$a && !$b){
    return 'masukan angka terlebih dahulu';
}
}
public function pembagian($a = null, $b = null){
    if ($a && $b){
     $c = $a / $b;
     echo $a.' / '.$b.' = '.$c;
 }
 elseif (isset($a)){
    $keta = 'masukan satu angka lagi';
    echo $keta;
}  if (!$a && !$b){
    return 'masukan angka terlebih dahulu';
}
}
public function loop()
    {
        $data = [
            ['nama'=>'kiko', 'kelas'=>'XI RPL 1','uang jajan'=>'40000'],
            ['nama'=>'koko', 'kelas'=>'XI RPL 1','uang jajan'=>'30000'],
            ['nama'=>'kiki', 'kelas'=>'XI RPL 1','uang jajan'=>'20000'],
            ['nama'=>'kaka', 'kelas'=>'XI RPL 1','uang jajan'=>'10000'],
        ];

        foreach($data as $val => $key){
            echo 'nama : '.$key['nama']."<br>".
           'kelas: '.$key['kelas']."<br>".
           'uang jajan : Rp. '.$key['uangjajan']."<br>";
        }
        }
    }
