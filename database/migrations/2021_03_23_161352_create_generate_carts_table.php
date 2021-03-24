<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGenerateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('generate_carts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cart_name');
            $table->string('cart_text');
            $table->bigInteger( 'claint_id' );
            $table->bigInteger( 'market_id' )->nullable();
            $table->bigInteger( 'sup_category_id' );
            $table->integer('ar_price');
            $table->integer('amrecan_price');
            $table->integer('kowit_price');
            $table->integer('amarat_price');
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
        Schema::dropIfExists('generate_carts');
    }
}
