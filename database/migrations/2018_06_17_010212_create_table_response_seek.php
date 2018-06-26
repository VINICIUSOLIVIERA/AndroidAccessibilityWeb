<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableResponseSeek extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("response_seek", function(Blueprint $table){
            $table->engine = 'InnoDB';
            $table->increments("id");
            $table->integer("seek_id")->unsigned();
            $table->integer("status");
            $table->date("prevision")->nullable();
            $table->date("conclusion")->nullable();
            $table->longText("description")->nullable();;
            $table->timestamps();

            $table->foreign("seek_id")
                  ->references("id")
                  ->on("seek")
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("response_seek");
    }
}
