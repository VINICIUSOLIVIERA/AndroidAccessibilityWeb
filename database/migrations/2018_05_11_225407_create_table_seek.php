<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSeek extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("seek", function(Blueprint $table){
            $table->engine = 'InnoDB';
            $table->increments("id");
            $table->string("topic");
            $table->string("description");
            $table->decimal("lat", 10, 8);
            $table->decimal("lng", 10, 8);
            $table->integer("user_id")->unsigned();
            $table->timestamps();

            $table->foreign("user_id")
                  ->references("id")
                  ->on("users")
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
        Schema::dropIfExists("seek");
    }
}
