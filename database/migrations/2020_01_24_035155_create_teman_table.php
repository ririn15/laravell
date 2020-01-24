<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teman', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->string('nis');
            $table->string('jns_kelamin');
             $table->text('alamat');
            $table->date('tggl_lahir');
            $table->integer('umur');
            $table->string('hobi');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teman');
    }
}
