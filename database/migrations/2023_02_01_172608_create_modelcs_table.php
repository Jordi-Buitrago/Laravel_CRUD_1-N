<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelcsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modelcs', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('places');
            $table->string('potencia');
            $table->string('consum');
            $table->unsignedBigInteger('cotxe_id');
            $table->foreign('cotxe_id')->references('id')->on('cotxes')->onDelete('cascade');
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
        Schema::dropIfExists('modelcs');
    }
}
