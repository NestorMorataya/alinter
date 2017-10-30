<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUbicacionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ubicacion', function(Blueprint $table)
		{
			$table->foreign('ubicacion_principal_fk', 'ubicacion_principal_fk')->references('ubicacion_pk')->on('ubicacion')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('unidad_fk', 'unidad_fk')->references('unidad_pk')->on('unidad')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ubicacion', function(Blueprint $table)
		{
			$table->dropForeign('ubicacion_principal_fk');
			$table->dropForeign('unidad_fk');
		});
	}

}
