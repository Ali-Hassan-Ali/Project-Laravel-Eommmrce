<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cart_name');
            $table->string('cart_text');
            $table->bigInteger( 'claint_id' );
            $table->bigInteger( 'market_id' )->nullable();
            $table->bigInteger( 'sub_category_id' )->unsigned();
            $table->integer('count_of_buy');
            $table->integer('ar_price');
            $table->integer('amrecan_price');
            $table->integer('kowit_price');
            $table->integer('amarat_price');
            $table->foreign('sub_category_id')->references('id')->on('sub_categories')->onDelete('cascade');

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
        Schema::dropIfExists('carts');
    }
}
