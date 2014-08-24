<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('photos', function($table){
			$table->increments('id');
			$table->string('caption',150);
			$table->string('photo_file_name',100);
			$table->integer('photo_file_size');
			$table->string('photo_content_type',100);
			$table->timestamp('photo_updated_at',100);
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
		Schema::drop('photos');
	}

}
