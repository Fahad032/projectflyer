<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlyersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('flyers', function(Blueprint $table){
        	$table->increments('id')->unsigned();
        	$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
			$table->string('name');
			$table->string('street');			
			$table->string('city');
			$table->string('zip');
			$table->string('country');
			$table->string('state');
			$table->string('sale_price');
			$table->text('description');
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
        //
        
        Schema::drop('flyers');
    }
}
