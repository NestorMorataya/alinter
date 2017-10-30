<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFacultadTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('facultad', function(Blueprint $table)
		{
			$table->foreign('linea_de_trabajo_fk', 'linea_de_trabajo_fk')->references('linea_de_trabajo_pk')->on('linea_de_trabajo')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('regional_fk', 'regional_fk')->references('regional_pk')->on('regional')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('facultad', function(Blueprint $table)
		{
			$table->dropForeign('linea_de_trabajo_fk');
			$table->dropForeign('regional_fk');
		});
	}

}
