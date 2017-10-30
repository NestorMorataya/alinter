<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUnidadPresupuestariaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('unidad_presupuestaria', function(Blueprint $table)
		{
			$table->integer('unidad_presupuestaria_pk')->primary('unidad_presupuestaria_pk');
			$table->text('nombre')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('unidad_presupuestaria');
	}

}
