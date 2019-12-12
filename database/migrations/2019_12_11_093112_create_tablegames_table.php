<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablegamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TableGames', function (Blueprint $table) {
            $table->increments('id');
            $table->string('izena')->unique();
            $table->text('deskripzioa');
            $table->integer('adina');
            $table->integer('jokalariKop');
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
        Schema::dropIfExists('tableGames');
    }
}
