<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAuditoriaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('auditoria', function(Blueprint $table)
		{
			$table->foreign('descargo_fk', 'descargo_fk')->references('descargo_pk')->on('descargo_m3')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('ingreso_fk', 'ingreso_fk')->references('ingreso_pk')->on('ingreso_m1')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('inventario_fk', 'inventario_fk')->references('inventario_pk')->on('inventario')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('traslado_fk', 'traslado_fk')->references('traslado_pk')->on('traslado_m2')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('auditoria', function(Blueprint $table)
		{
			$table->dropForeign('descargo_fk');
			$table->dropForeign('ingreso_fk');
			$table->dropForeign('inventario_fk');
			$table->dropForeign('traslado_fk');
		});
	}

}
