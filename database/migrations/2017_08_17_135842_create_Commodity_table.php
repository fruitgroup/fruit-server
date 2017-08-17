<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommodityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Commodity', function (Blueprint $table) {
            $table->increments('id')->comment('Primary key');
            $table->bigInteger('commodity_id')->comment('Commodity ID');
            $table->string('name',50)->comment('Commodity name');
            $table->integer('type_id')->comment('type id');
            $table->string('remarks')->comment('brief introduction');
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
        Schema::dropIfExists('Commodity');
    }
}
