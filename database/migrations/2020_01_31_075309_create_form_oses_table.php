<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormOsisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_oses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string ('nama lengkap');
            $table->string  ('ttl');
            $table->string  ('agama');
            $table->string  ('alamat');
            $table->string  ('notel');
            $table->string('tujuan')->unique;
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
        Schema::dropIfExists('form_oses');
    }
}
