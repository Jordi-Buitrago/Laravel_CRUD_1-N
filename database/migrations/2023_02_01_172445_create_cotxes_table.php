<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCotxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cotxes', function (Blueprint $table) {
            $table->id();
            $table->string('marca');
            $table->string('model');
            $table->string('matricula');
            $table->string('color');
            $table->string('any');
            $table->string('preu');
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
        Schema::dropIfExists('cotxes');
    }
}
