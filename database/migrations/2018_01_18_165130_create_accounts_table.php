<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()  
    {
        Schema::create('accounts', function (Blueprint $table) {
            
            $table->increments('id');
            $table->integer('goal_id')->nullable();
            $table->double('deposit', 8, 2)->default(100.00)->unsigned();
            $table->double('withdraw', 8, 2)->nullable()->unsigned()->default(0.00);
            $table->double('balance', 8, 2)->unsigned()->default(0.00);
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
        Schema::dropIfExists('accounts');
    }
}
