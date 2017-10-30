<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBienesInmueblesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bienes_inmuebles', function(Blueprint $table)
		{
			$table->integer('bienes_inmuebles_pk')->primary('bienes_inmuebles_pk');
			$table->integer('identificacion_fk')->nullable();
			$table->text('descripcion')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('bienes_inmuebles');
	}

}
