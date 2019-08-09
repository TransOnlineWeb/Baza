<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeographicalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('geographical', function (Blueprint $table) {
            $table->bigIncrements('id');
        	$table->integer('user_id')->index()->nullable();
             $table->string('County');
            $table->string('Ward');
            $table->string('Location');
            $table->string('Sublocation');
            $table->string('Village');
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
        Schema::dropIfExists('geographical');
    }
}
