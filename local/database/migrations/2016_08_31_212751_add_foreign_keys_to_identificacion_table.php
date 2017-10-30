<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToIdentificacionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('identificacion', function(Blueprint $table)
		{
			$table->foreign('especifico_fk', 'especifico_fk')->references('especifico_pk')->on('especifico')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('fuente_fk', 'fuente_fk')->references('fuente_pk')->on('fuente')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('clase_fk', 'identificacion_clase_fk_fkey')->references('clase_pk')->on('clase')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('proveedor_fk', 'proveedor_fk')->references('proveedor_pk')->on('proveedor')->onUpdate('CASCADE')->onDelete('CASCADE');
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
		Schema::table('identificacion', function(Blueprint $table)
		{
			$table->dropForeign('especifico_fk');
			$table->dropForeign('fuente_fk');
			$table->dropForeign('identificacion_clase_fk_fkey');
			$table->dropForeign('proveedor_fk');
			$table->dropForeign('ubicacion_fk');
			$table->dropForeign('unidad_fk');
		});
	}

}
