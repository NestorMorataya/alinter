<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToInventarioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('inventario', function(Blueprint $table)
		{
			$table->foreign('bien_fk', 'bien_fk')->references('bien_pk')->on('bien')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('descargo_fk', 'descargo_fk')->references('descargo_pk')->on('descargo_m3')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('estado_fk', 'estado_fk')->references('estado_pk')->on('estado')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('identificacion_fk', 'identificacion_fk')->references('identificacion_pk')->on('identificacion')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('ingreso_fk', 'ingreso_fk')->references('ingreso_pk')->on('ingreso_m1')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('traslado_fk', 'traslado_fk')->references('traslado_pk')->on('traslado_m2')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('ubicacion_fk', 'ubicacion_fk')->references('ubicacion_pk')->on('ubicacion')->onUpdate('CASCADE')->onDelete('CASCADE');
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
		Schema::table('inventario', function(Blueprint $table)
		{
			$table->dropForeign('bien_fk');
			$table->dropForeign('descargo_fk');
			$table->dropForeign('estado_fk');
			$table->dropForeign('identificacion_fk');
			$table->dropForeign('ingreso_fk');
			$table->dropForeign('traslado_fk');
			$table->dropForeign('ubicacion_fk');
			$table->dropForeign('unidad_fk');
		});
	}

}
