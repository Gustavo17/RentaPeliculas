<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlquilersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alquilers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cliente_id');
            $table->integer('movie_id');
            $table->integer('status_id');
            $table->integer('cantidad_ejem');
            $table->timestamp('registration_date');
            $table->timestamp('delivery_date');
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
        Schema::drop('alquilers');
    }
}
