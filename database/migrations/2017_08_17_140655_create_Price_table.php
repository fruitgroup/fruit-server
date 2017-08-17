<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePriceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Price', function (Blueprint $table) {
            $table->increments('id')->comment('Primary key');
            $table->bigInteger('commodity_id')->comment('Commodity ID');
            $table->decimal('price', 12, 2)->comment('price');
            $table->double('column', 5, 2)->comment('Commodity discount');
            $table->timestampsTz();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Price');
    }
}
