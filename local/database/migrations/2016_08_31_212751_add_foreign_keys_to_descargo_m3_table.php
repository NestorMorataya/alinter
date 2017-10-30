<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDescargoM3Table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('descargo_m3', function(Blueprint $table)
		{
			$table->foreign('fase_fk', 'fase_fk')->references('fase_pk')->on('fase')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('jefe_activo_fk', 'jefe_activo_fk')->references('empleado_pk')->on('empleados')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('jefe_facultad_fk', 'jefe_facultad_fk')->references('empleado_pk')->on('empleados')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('unidad_fk', 'unidad_solicita_fk')->references('unidad_pk')->on('unidad')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('descargo_m3', function(Blueprint $table)
		{
			$table->dropForeign('fase_fk');
			$table->dropForeign('jefe_activo_fk');
			$table->dropForeign('jefe_facultad_fk');
			$table->dropForeign('unidad_solicita_fk');
		});
	}

}
