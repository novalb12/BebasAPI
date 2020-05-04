<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMatkulTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('matkul', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->string('nama_matkul', 100);
			$table->string('jam', 20);
			$table->integer('id_dosen')->index('id_dosen');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('matkul');
	}

}
