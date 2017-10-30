<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToLineaDeTrabajoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('linea_de_trabajo', function(Blueprint $table)
		{
			$table->foreign('unidad_presupuestaria_fk', 'unidad_presupuestaria_fk')->references('unidad_presupuestaria_pk')->on('unidad_presupuestaria')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('linea_de_trabajo', function(Blueprint $table)
		{
			$table->dropForeign('unidad_presupuestaria_fk');
		});
	}

}
