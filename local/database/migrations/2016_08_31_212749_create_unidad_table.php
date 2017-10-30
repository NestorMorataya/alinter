<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUnidadTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('unidad', function(Blueprint $table)
		{
			$table->string('unidad_pk', 10)->primary('unidad_pk');
			$table->integer('facultad_fk')->nullable();
			$table->string('nombre_unidad', 250)->nullable();
			$table->integer('jefe_fk')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('unidad');
	}

}
