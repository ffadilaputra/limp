<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_transaction', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('fk_category')->unsigned()->nullable();
            $table->foreign('fk_category')
                  ->references('id')->on('tb_category')
                  ->onDelete('set null');
            $table->string('tipe');
            $table->integer('nominal');
            $table->date('transaction_date');
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
        Schema::dropIfExists('tb_transaction');
    }
}
