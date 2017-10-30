<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFuenteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fuente', function(Blueprint $table)
		{
			$table->integer('fuente_pk')->primary('fuente_pk');
			$table->string('nombre_fuente', 250)->nullable();
			$table->text('descripcion_fuente')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('fuente');
	}

}
