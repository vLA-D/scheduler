<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateCostsTable
 */
class CreateCostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('costs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 64);
            $table->integer('amount');
            $table->string('description');
            $table->string('date');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('seller_id');

            $table->foreign('user_id')
                ->references('id')->on('users');
            $table->foreign('seller_id')
                ->references('id')->on('sellers');

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
        Schema::dropIfExists('costs');
    }
}
