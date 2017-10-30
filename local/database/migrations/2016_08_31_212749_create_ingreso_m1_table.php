<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIngresoM1Table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ingreso_m1', function(Blueprint $table)
		{
			$table->integer('ingreso_pk')->primary('ingreso_pk');
			$table->string('linea_de_trabajo_fk', 5)->nullable();
			$table->integer('fuente_fk')->nullable();
			$table->integer('proveedor_fk')->nullable();
			$table->integer('fase_fk')->nullable();
			$table->string('unidad_fk', 10)->nullable();
			$table->integer('jefe_recibe_fk')->nullable();
			$table->integer('jefe_facultad_fk')->nullable();
			$table->integer('jefe_activo_fk')->nullable();
			$table->integer('numero_factura')->nullable();
			$table->date('fecha_factura')->nullable();
			$table->integer('numero_acuerdo')->nullable();
			$table->date('fecha_acuerdo')->nullable();
			$table->string('donante', 250)->nullable();
			$table->integer('cef')->nullable();
			$table->integer('orden_de_compra')->nullable();
			$table->decimal('saldo_inicial', 15)->nullable();
			$table->decimal('valor_total', 15)->nullable();
			$table->date('fecha_ingreso')->nullable()->default('now()');
			$table->text('observacion')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ingreso_m1');
	}

}
