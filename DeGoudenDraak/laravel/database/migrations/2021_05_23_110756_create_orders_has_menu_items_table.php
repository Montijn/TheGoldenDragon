<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersHasMenuItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders_has_menu_items', function (Blueprint $table) {
            $table->bigInteger('orders_id')->unsigned();
            $table->bigInteger('menu_items_id')->unsigned();
            $table->integer('amount');
            $table->decimal('price', 6, 2);
            $table->foreign('orders_id')->references('id')->on('orders');
            $table->foreign('menu_items_id')->references('id')->on('menu_items');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders_has_menu_items');
    }
}
