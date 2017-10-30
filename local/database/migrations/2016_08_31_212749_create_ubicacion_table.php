<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUbicacionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ubicacion', function(Blueprint $table)
		{
			$table->integer('ubicacion_pk')->primary('ubicacion_pk');
			$table->string('unidad_fk', 10)->nullable();
			$table->string('ubicacion', 100)->nullable();
			$table->integer('ubicacion_principal_fk')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ubicacion');
	}

}
