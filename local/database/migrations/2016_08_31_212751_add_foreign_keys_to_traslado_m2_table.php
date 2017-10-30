<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTrasladoM2Table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('traslado_m2', function(Blueprint $table)
		{
			$table->foreign('jefe_activo_fk', 'jefe_activo_fk')->references('empleado_pk')->on('empleados')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('jefe_entrega_fk', 'jefe_entrega_fk')->references('empleado_pk')->on('empleados')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('jefe_recibe_fk', 'jefe_recibe_fk')->references('empleado_pk')->on('empleados')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('unidad_entrega_fk', 'unidad_entrega_fk')->references('unidad_pk')->on('unidad')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('unidad_recibe_fk', 'unidad_recibe_fk')->references('unidad_pk')->on('unidad')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('traslado_m2', function(Blueprint $table)
		{
			$table->dropForeign('jefe_activo_fk');
			$table->dropForeign('jefe_entrega_fk');
			$table->dropForeign('jefe_recibe_fk');
			$table->dropForeign('unidad_entrega_fk');
			$table->dropForeign('unidad_recibe_fk');
		});
	}

}
