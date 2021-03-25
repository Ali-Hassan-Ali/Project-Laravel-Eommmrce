<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCliantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('email_verified_code');
            $table->string('phone');
            $table->string('phone_verified_code');
            $table->string('password');
            $table->text('currency_type');
            $table->string('account_balance');
            $table->string('assignment_link');
            $table->integer('send_monthly_status');
            $table->integer('occastion_Status');
            $table->string('assignment_code');

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
        Schema::dropIfExists('cliants');
    }
}
