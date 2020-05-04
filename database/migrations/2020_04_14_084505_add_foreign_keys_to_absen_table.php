<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAbsenTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('absen', function(Blueprint $table)
		{
			#$table->foreign('id_matkul', 'absen_ibfk_1')->references('id')->on('matkul')->onUpdate('CASCADE')->onDelete('CASCADE');
			#$table->foreign('npm', 'absen_ibfk_2')->references('nomor_induk')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('absen', function(Blueprint $table)
		{
			$table->dropForeign('absen_ibfk_1');
			$table->dropForeign('absen_ibfk_2');
		});
	}

}
