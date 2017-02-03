<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNote extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_note', function (Blueprint $table) {
            $table->increments('id');
            $table->string('note_name');
            $table->text('note_desc');
            $table->integer('fk_c_note')->unsigned()->nullable();
            $table->foreign('fk_c_note')
                  ->references('id')->on('tb_category_notes')
                  ->onDelete('set null');
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
        Schema::dropIfExists('tb_note');
    }
}
