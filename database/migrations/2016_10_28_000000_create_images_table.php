<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('images', function(Blueprint $table) {
            $table->increments('id');
            $table->string('imagename');
            $table->integer('category');
            $table->tinyInteger('open_flg');
            $table->datetime('open_date');
            $table->datetime('close_date')->nullable();
            $table->text('filedetail')->nullable();
            $table->integer('created_tool_user_id');
            $table->integer('updated_tool_user_id');
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
		Schema::drop('images');
	}

}
