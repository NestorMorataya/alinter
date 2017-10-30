<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrasladoM2Table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('traslado_m2', function(Blueprint $table)
		{
			$table->integer('traslado_pk')->primary('traslado_pk');
			$table->string('unidad_entrega_fk', 10)->nullable();
			$table->string('unidad_recibe_fk', 10)->nullable();
			$table->integer('jefe_entrega_fk')->nullable();
			$table->integer('jefe_recibe_fk')->nullable();
			$table->integer('jefe_activo_fk')->nullable();
			$table->date('fecha_traslado')->nullable();
			$table->integer('tipo_traslado')->nullable();
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
		Schema::drop('traslado_m2');
	}

}
