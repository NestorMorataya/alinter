<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEspecificoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('especifico', function(Blueprint $table)
		{
			$table->integer('especifico_pk')->primary('especifico_pk');
			$table->integer('cuenta_fk')->nullable();
			$table->string('nombre_especifico', 250)->nullable();
			$table->text('descripcion_especifico')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('especifico');
	}

}
