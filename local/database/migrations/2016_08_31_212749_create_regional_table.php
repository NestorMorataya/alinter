<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRegionalTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('regional', function(Blueprint $table)
		{
			$table->integer('regional_pk')->primary('regional_pk');
			$table->string('nombre_regional', 250)->nullable();
			$table->string('ubicacion', 250)->nullable();
			$table->string('telefono_regional', 15)->nullable();
			$table->text('direccion_regional')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('regional');
	}

}
