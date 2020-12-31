<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tables', function (Blueprint $table) {
            $table->id();
            $table->integer('table_number');
            $table->integer('nbrPlaces');
            $table->boolean('reserved');
            $table->timestamps();

            $table->unsignedBigInteger('reservation_id')->index()->nullable();
            
            $table->foreign('reservation_id')->references('id')
                                             ->on('reservations')
                                             ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tables');
    }
}
