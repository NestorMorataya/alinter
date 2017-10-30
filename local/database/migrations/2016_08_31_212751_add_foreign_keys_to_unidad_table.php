<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUnidadTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('unidad', function(Blueprint $table)
		{
			$table->foreign('facultad_fk', 'facultad_fk')->references('facultad_pk')->on('facultad')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('jefe_fk', 'jefe_fk')->references('empleado_pk')->on('empleados')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('unidad', function(Blueprint $table)
		{
			$table->dropForeign('facultad_fk');
			$table->dropForeign('jefe_fk');
		});
	}

}
