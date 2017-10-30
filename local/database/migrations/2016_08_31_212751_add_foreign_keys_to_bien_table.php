<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToBienTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('bien', function(Blueprint $table)
		{
			$table->foreign('bien_principal_fk', 'bien_principal_fk')->references('bien_pk')->on('bien')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('empleado_fk', 'empleado_fk')->references('empleado_pk')->on('empleados')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('identificacion_fk', 'identificacion_fk')->references('identificacion_pk')->on('identificacion')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('marca_fk', 'marca_fk')->references('marca_pk')->on('marca')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('bien', function(Blueprint $table)
		{
			$table->dropForeign('bien_principal_fk');
			$table->dropForeign('empleado_fk');
			$table->dropForeign('identificacion_fk');
			$table->dropForeign('marca_fk');
		});
	}

}
