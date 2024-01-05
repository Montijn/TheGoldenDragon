<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_items', function (Blueprint $table) {
            $table->id();
            $table->integer('menu_code');
            $table->string('menu_code_addition', 1);
            $table->string('name', 70);
            $table->decimal('price', 5, 2);
            $table->string('description', 200);
            $table->timestamps();
            $table->bigInteger('dish_type')->unsigned()->nullable();
            $table->foreign('dish_type')->references('id')->on('dish_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu_items');
    }
}
