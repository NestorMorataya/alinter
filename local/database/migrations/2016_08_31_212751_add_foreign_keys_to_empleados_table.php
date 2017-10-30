<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEmpleadosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('empleados', function(Blueprint $table)
		{
			$table->foreign('jefe_fk', 'jefe_fk')->references('empleado_pk')->on('empleados')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('puesto_fk', 'puesto_fk')->references('puesto_pk')->on('puesto')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('usuario_fk', 'usuario_fk')->references('id')->on('usuarios')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('empleados', function(Blueprint $table)
		{
			$table->dropForeign('jefe_fk');
			$table->dropForeign('puesto_fk');
			$table->dropForeign('usuario_fk');
		});
	}

}
