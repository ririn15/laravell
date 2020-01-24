<?php

use Illuminate\Database\Seeder;

class tugas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teman = [
            ['nama'=>'lala', 'nis'=>'25263728','jns_kelamin'=>'laki','alamat'=>'bojong','tnggl_lahir'=>carbon::create('1933','03','11'),'umur'=>'22','hobi'=>'main'],
            ['nama'=>'lili', 'nis'=>'789792332','jns_kelamin'=>'cewe','alamat'=>'bajang','tnggl_lahir'=>carbon::create('1923','04','12'),'umur'=>'33','hobi'=>'bola'],
            ['nama'=>'lulu', 'nis'=>'324434453','jns_kelamin'=>'laki','alamat'=>'boong','tnggl_lahir'=>carbon::create('1944','06','07'),'umur'=>'22','hobi'=>'makan'],
            ['nama'=>'lele', 'nis'=>'252655435','jns_kelamin'=>'cewe','alamat'=>'bojing','tnggl_lahir'=>carbon::create('1924','04','01'),'umur'=>'23','hobi'=>'minum'],
            ['nama'=>'lolo', 'nis'=>'223644555','jns_kelamin'=>'laki','alamat'=>'bijong','tnggl_lahir'=>carbon::create('1965','11','04'),'umur'=>'25','hobi'=>'sepedahan'],
            ['nama'=>'kihu', 'nis'=>'252637638','jns_kelamin'=>'laki','alamat'=>'bojong','tnggl_lahir'=>carbon::create('1933','02','11'),'umur'=>'22','hobi'=>'lari'],
            ['nama'=>'koku', 'nis'=>'789792432','jns_kelamin'=>'cewe','alamat'=>'bajang','tnggl_lahir'=>carbon::create('1923','03','12'),'umur'=>'33','hobi'=>'mabs'],
            ['nama'=>'kiko', 'nis'=>'324434653','jns_kelamin'=>'laki','alamat'=>'boong','tnggl_lahir'=>carbon::create('1944','06','07'),'umur'=>'22','hobi'=>'golf'],
            ['nama'=>'kaku', 'nis'=>'252632435','jns_kelamin'=>'cewe','alamat'=>'bojing','tnggl_lahir'=>carbon::create('1924','07','01'),'umur'=>'23','hobi'=>'nyeretan'],
            ['nama'=>'kaku', 'nis'=>'252632435','jns_kelamin'=>'cewe','alamat'=>'bojing','tnggl_lahir'=>carbon::create('1924','07','01'),'umur'=>'23','hobi'=>'bernang'],
            ['nama'=>'baba', 'nis'=>'223554555','jns_kelamin'=>'laki','alamat'=>'bijong','tnggl_lahir'=>carbon::create('1965','04','04'),'umur'=>'25','hobi'=>'olahraga'],

        ];
    }
}
