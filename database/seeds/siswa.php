<?php

use Illuminate\Database\Seeder;

class siswa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $siswa = [
            ['nama'=>'kiko', 'nis'=>'252637638','jns_kelamin'=>'laki','alamat'=>'bojong','tnggl_lahir'=>carbon::create('1933','02','11'),'umur'=>'22'],
            ['nama'=>'koko', 'nis'=>'789792432','jns_kelamin'=>'cewe','alamat'=>'bajang','tnggl_lahir'=>carbon::create('1923','01','12'),'umur'=>'33'],
            ['nama'=>'kiki', 'nis'=>'324434653','jns_kelamin'=>'laki','alamat'=>'boong','tnggl_lahir'=>carbon::create('1944','03','07'),'umur'=>'22'],
            ['nama'=>'kaka', 'nis'=>'252632435','jns_kelamin'=>'cewe','alamat'=>'bojing','tnggl_lahir'=>carbon::create('1924','05','01'),'umur'=>'23'],
            ['nama'=>'koki', 'nis'=>'223554555','jns_kelamin'=>'laki','alamat'=>'bijong','tnggl_lahir'=>carbon::create('1965','06','04'),'umur'=>'25']

            //
        ];
    }
}
