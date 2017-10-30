<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInventarioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('inventario', function(Blueprint $table)
		{
			$table->integer('inventario_pk')->primary('inventario_pk');
			$table->integer('ingreso_fk')->nullable();
			$table->integer('traslado_fk')->nullable();
			$table->integer('descargo_fk')->nullable();
			$table->string('unidad_fk', 10)->nullable();
			$table->integer('estado_fk')->nullable();
			$table->integer('identificacion_fk')->nullable();
			$table->integer('ubicacion_fk')->nullable();
			$table->integer('bien_fk')->nullable();
			$table->date('fecha_inventario')->nullable()->default('now()');
			$table->integer('activo')->nullable();
			$table->integer('inicio')->nullable();
			$table->date('fecha_verificacion')->nullable();
			$table->text('observacion')->nullable();
			$table->integer('movimiento')->nullable();
			$table->string('unidad_traslado', 10)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('inventario');
	}

}
