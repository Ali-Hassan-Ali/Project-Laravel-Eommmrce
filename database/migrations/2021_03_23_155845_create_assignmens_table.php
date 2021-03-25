<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssignmensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assignmens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger( 'claint_id' );
            $table->string('total_balance')->nullable();
            $table->string('exist_balance')->nullable();
            $table->string('number_of_invited')->nullable();
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
        Schema::dropIfExists('assignmens');
    }
}
