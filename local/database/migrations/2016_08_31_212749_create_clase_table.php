<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClaseTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('clase', function(Blueprint $table)
		{
			$table->string('clase_pk', 3);
			$table->integer('catalogo_fk');
			$table->string('nombre_clase', 250)->nullable();
			$table->primary(['clase_pk','catalogo_fk'], 'clase_cat_pk');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('clase');
	}

}
