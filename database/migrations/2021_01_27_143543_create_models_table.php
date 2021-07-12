<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modelos', function (Blueprint $table) {
             $table->engine = 'InnoDB';
            $table->id()->unsigned();
            $table->string('marca');
            $table->string('descripcion')->unique();
            $table->string('status');
            $table->rememberToken();
            $table->timestamps();
            $table->unsignedBigInteger('branchoffice_id');
            $table->foreign('branchoffice_id')->references('id')->on('branchoffices');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('models');
    }
}
