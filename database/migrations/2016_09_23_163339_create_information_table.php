<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('information', function(Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('sub_title')->nullable();
            $table->tinyInteger('open_flg');
            $table->datetime('open_date');
            $table->datetime('close_date')->nullable();
            $table->integer('store_id');
            $table->text('article')->nullable();
            $table->text('pdffile_names')->nullable();
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
		Schema::drop('information');
	}

}
