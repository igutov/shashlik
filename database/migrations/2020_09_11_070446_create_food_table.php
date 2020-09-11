<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('food_category');
            $table->string('name');
            $table->float('weight');
            $table->string('composition');
            $table->boolean('hit')->default(0);
            $table->float('price');
            $table->float('price_new');
            $table->binary('image');
            // $table->bigInteger('status_id')->unsigned();
            // $table->foreign('status_id')->references('id')->on('status')->default(0);
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
        Schema::dropIfExists('food');
    }
}
