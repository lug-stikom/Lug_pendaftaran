<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePertemuanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pertemuan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('materi', 100);
            $table->string('deskripsi', 255);
            $table->dateTime('diadakan');
            $table->string('ruang', 20);
            $table->integer('pengurus_id');
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
        Schema::drop('pertemuan');
    }
}
