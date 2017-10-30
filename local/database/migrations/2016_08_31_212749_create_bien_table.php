<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBienTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bien', function(Blueprint $table)
		{
			$table->integer('bien_pk')->primary('bien_pk');
			$table->integer('identificacion_fk')->nullable();
			$table->integer('marca_fk')->nullable();
			$table->integer('bien_principal_fk')->nullable();
			$table->integer('empleado_fk')->nullable();
			$table->text('descripcion_equipo')->nullable();
			$table->string('modelo', 250)->nullable();
			$table->string('serie', 100)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('bien');
	}

}
