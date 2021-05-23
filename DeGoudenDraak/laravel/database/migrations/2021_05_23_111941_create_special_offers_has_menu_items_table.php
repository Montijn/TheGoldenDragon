<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecialOffersHasMenuItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('special_offers_has_menu_items', function (Blueprint $table) {
            $table->bigInteger('special_offers_id')->unsigned();
            $table->bigInteger('menu_items_id')->unsigned();
            $table->foreign('special_offers_id')->references('id')->on('special_offers');
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
        Schema::dropIfExists('special_offers_has_menu_items');
    }
}
