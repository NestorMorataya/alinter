<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRubroTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rubro', function(Blueprint $table)
		{
			$table->integer('rubro_pk')->primary('rubro_pk');
			$table->string('nombre_rubro', 250)->nullable();
			$table->text('descripcion_rubro')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('rubro');
	}

}
