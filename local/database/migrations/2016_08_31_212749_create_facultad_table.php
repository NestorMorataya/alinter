<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFacultadTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('facultad', function(Blueprint $table)
		{
			$table->integer('facultad_pk')->primary('facultad_pk');
			$table->integer('regional_fk')->nullable();
			$table->string('linea_de_trabajo_fk', 5)->nullable();
			$table->string('nombre_facultad', 250)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('facultad');
	}

}
