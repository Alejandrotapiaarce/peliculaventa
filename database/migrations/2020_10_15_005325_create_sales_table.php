<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->string('costs');
            $table->string('clients_name');
            $table->string('sales_date');
            $table->foreing('serie_id')->references('serie_id')->on('series');
            $table->foreing('game_id')->references('game_id')->on('games');
            $table->foreing('movie_id')->references('movie_id')->on('movies');
            $table->foreing('product_id')->references('product_id')->on('products');
            $table->foreing('shipping_id')->references('shipping_id')->on('shippings');
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
        Schema::dropIfExists('sales');
    }
}
