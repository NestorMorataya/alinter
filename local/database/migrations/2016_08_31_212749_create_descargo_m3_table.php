<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDescargoM3Table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('descargo_m3', function(Blueprint $table)
		{
			$table->integer('descargo_pk')->primary('descargo_pk');
			$table->integer('fase_fk')->nullable();
			$table->string('unidad_fk', 10)->nullable();
			$table->integer('jefe_facultad_fk')->nullable();
			$table->integer('jefe_activo_fk')->nullable();
			$table->date('fecha_descargo')->nullable();
			$table->string('lugar_descargo', 50)->nullable();
			$table->text('motivo_descargo')->nullable();
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
		Schema::drop('descargo_m3');
	}

}
