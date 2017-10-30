<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmpleadosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('empleados', function(Blueprint $table)
		{
			$table->integer('empleado_pk')->primary('empleado_pk');
			$table->string('nombre_empleado', 50)->nullable();
			$table->string('apellido_empleado', 50)->nullable();
			$table->integer('jefe_fk')->nullable();
			$table->integer('puesto_fk')->nullable();
			$table->string('unidad_fk', 10)->nullable();
			$table->integer('usuario_fk')->nullable()->unique('usuario_fk');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('empleados');
	}

}
