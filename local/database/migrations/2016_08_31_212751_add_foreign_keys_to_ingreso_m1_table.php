<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToIngresoM1Table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ingreso_m1', function(Blueprint $table)
		{
			$table->foreign('fase_fk', 'fase_fk')->references('fase_pk')->on('fase')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('fuente_fk', 'fuente_fk')->references('fuente_pk')->on('fuente')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('jefe_activo_fk', 'jefe_activo_fk')->references('empleado_pk')->on('empleados')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('jefe_facultad_fk', 'jefe_facultad_fk')->references('empleado_pk')->on('empleados')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('jefe_recibe_fk', 'jefe_recibe_fk')->references('empleado_pk')->on('empleados')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('linea_de_trabajo_fk', 'linea_de_trabajo_fk')->references('linea_de_trabajo_pk')->on('linea_de_trabajo')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('proveedor_fk', 'proveedor_fk')->references('proveedor_pk')->on('proveedor')->onUpdate('CASCADE')->onDelete('CASCADE');
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
		Schema::table('ingreso_m1', function(Blueprint $table)
		{
			$table->dropForeign('fase_fk');
			$table->dropForeign('fuente_fk');
			$table->dropForeign('jefe_activo_fk');
			$table->dropForeign('jefe_facultad_fk');
			$table->dropForeign('jefe_recibe_fk');
			$table->dropForeign('linea_de_trabajo_fk');
			$table->dropForeign('proveedor_fk');
			$table->dropForeign('unidad_fk');
		});
	}

}
