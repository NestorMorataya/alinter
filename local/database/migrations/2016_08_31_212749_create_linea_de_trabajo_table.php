<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLineaDeTrabajoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('linea_de_trabajo', function(Blueprint $table)
		{
			$table->string('linea_de_trabajo_pk', 5)->primary('linea_de_trabajo_pk');
			$table->integer('unidad_presupuestaria_fk')->nullable();
			$table->text('nombre_linea')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('linea_de_trabajo');
	}

}
