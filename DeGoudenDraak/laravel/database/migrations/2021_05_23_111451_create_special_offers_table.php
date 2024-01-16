<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecialOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('special_offers', function (Blueprint $table) {
            $table->id();
            $table->string('name', 45);
            $table->string('description', 200);
            $table->double('price');
            $table->timestamp('expires_at')->default(now()->addWeek());
/*            $table->unsignedBigInteger('rice_choice_id');
            $table->foreign('rice_choice_id')->references('id')->on('rice_choice');*/
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
        Schema::dropIfExists('special_offers');
    }
}
