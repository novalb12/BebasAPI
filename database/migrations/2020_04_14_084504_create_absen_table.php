<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAbsenTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('absen', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->bigInteger('npm')->index('npm');
			$table->integer('id_matkul')->unsigned()->index('id_matkul');
			$table->integer('pertemuan');
			$table->string('kehadiran', 20);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('absen');
	}

}
