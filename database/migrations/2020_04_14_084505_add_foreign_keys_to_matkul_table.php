<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToMatkulTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('matkul', function(Blueprint $table)
		{
			#$table->foreign('id_dosen', 'matkul_ibfk_1')->references('nomor_induk')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('matkul', function(Blueprint $table)
		{
			$table->dropForeign('matkul_ibfk_1');
		});
	}

}
