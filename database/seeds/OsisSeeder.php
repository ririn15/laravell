<?php

use Illuminate\Database\Seeder;

class OsisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $Osis =[
            ['nama'=>'kiko','tnggl_lahir'=>carbon::create('1933','07','12'),'agama'=>'islam','alamat'=>'bjg','notel'=>'0909897896857645','tujuan'=>'hidup'],
            ['nama'=>'koko','tnggl_lahir'=>carbon::create('1932','06','11'),'agama'=>'islam','alamat'=>'kkg','notel'=>'0909897877757645','tujuan'=>'hidup'],
            ['nama'=>'kuko','tnggl_lahir'=>carbon::create('1934','05','02'),'agama'=>'islam','alamat'=>'llg','notel'=>'0909897866657645','tujuan'=>'hidup'],
            ['nama'=>'kiki','tnggl_lahir'=>carbon::create('1953','01','04'),'agama'=>'islam','alamat'=>'baa','notel'=>'0909897846857645','tujuan'=>'hidup'],
            ['nama'=>'kuku','tnggl_lahir'=>carbon::create('1936','03','02'),'agama'=>'islam','alamat'=>'ber','notel'=>'0909897334557645','tujuan'=>'hidup'],
            ['nama'=>'keke','tnggl_lahir'=>carbon::create('1943','02','05'),'agama'=>'islam','alamat'=>'btt','notel'=>'0909897896833335','tujuan'=>'hidup'],

        ];
    }
}
