<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksiPengeluarans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_pengeluaran', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->date('tgl_pengeluaran');
            $table->double('nominal');
            $table->integer('fk_category')->unsigned()->nullable();
            $table->foreign('fk_category')
                  ->references('id')->on('tb_category')
                  ->onDelete('set null');  
            $table->text('keterangan');
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
        Schema::dropIfExists('tb_pengeluaran');
    }
}
