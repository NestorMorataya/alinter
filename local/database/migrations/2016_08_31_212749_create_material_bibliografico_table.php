<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMaterialBibliograficoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('material_bibliografico', function(Blueprint $table)
		{
			$table->integer('material_pk')->primary('material_pk');
			$table->integer('identificacion_fk')->nullable();
			$table->integer('autor_fk')->nullable();
			$table->string('titulo', 250)->nullable();
			$table->string('isbn', 100)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('material_bibliografico');
	}

}
