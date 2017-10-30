<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVehiculoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vehiculo', function(Blueprint $table)
		{
			$table->integer('vehiculo_pk')->primary('vehiculo_pk');
			$table->integer('identificacion_fk')->nullable();
			$table->integer('marca_fk')->nullable();
			$table->string('modelo', 250)->nullable();
			$table->string('numero_motor', 250)->nullable();
			$table->string('numero_chasis', 250)->nullable();
			$table->integer('anio_fabricacion')->nullable();
			$table->string('placa', 8)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('vehiculo');
	}

}
