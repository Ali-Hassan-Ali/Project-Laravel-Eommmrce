<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupportCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('support_carts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger( 'claint_id' );
            $table->string('cart_type');
            $table->string('name_cart');
            $table->string('details_cart');
            $table->string('attachmnet');
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
        Schema::dropIfExists('support_carts');
    }
}
