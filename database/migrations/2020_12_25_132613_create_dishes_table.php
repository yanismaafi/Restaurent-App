<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDishesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dishes', function (Blueprint $table) {
            
            $table->id();
            $table->string('name');
            $table->float('price');
            $table->text('ingredient');
            $table->string('image');
            $table->unsignedBigInteger('category_id')->index();
            $table->timestamps();

            $table->foreign('category_id')->references('id')
                                          ->on('categories')
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
        Schema::dropIfExists('dishes');
    }
}
