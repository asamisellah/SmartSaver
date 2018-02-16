<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goals', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('user_id')->nullable();
            $table->string('goal_title', 30);
            $table->text('description')->nullable();
            $table->double('target_amount', 8, 2)->unsigned();
            $table->double('deposit', 8, 2)->default(0.00)->unsigned();
            $table->double('withdraw', 8, 2)->nullable()->unsigned()->default(0.00);
            $table->double('balance', 8, 2)->unsigned()->default(0.00);
            $table->dateTime('target_date');
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
        Schema::dropIfExists('goals');
    }
}
