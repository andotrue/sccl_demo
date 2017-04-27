<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccesslogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('accesslogs', function(Blueprint $table) {
            $table->increments('id');
            $table->date('logdate');
            $table->integer('userId');
            $table->string('type');
            $table->string('pagePath')->nullable();
            $table->string('pageTitle')->nullable();
            $table->integer('count');
            $table->timestamps();
            
            $table->index(['logdate'], 'index1');
            $table->index(['logdate','userId','type'], 'index2');
            $table->index(['pagePath'], 'index3');
            $table->index(['logdate','userId','type','pagePath'], 'index4');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('accesslogs');
	}

}
