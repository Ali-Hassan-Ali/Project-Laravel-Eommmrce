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

            $table->bigInteger('users_id');
            $table->string('market_id')->nullable();
            $table->bigInteger('sub_category_id')->unsigned();
            
            $table->double('count_of_buy')->default('0');
            $table->double('ar_price');
            $table->double('amrecan_price');
            $table->double('kowit_price');
            $table->double('amarat_price');

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
