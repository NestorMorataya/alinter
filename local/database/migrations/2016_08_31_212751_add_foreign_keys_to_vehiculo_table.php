<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToVehiculoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('vehiculo', function(Blueprint $table)
		{
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
		Schema::table('vehiculo', function(Blueprint $table)
		{
			$table->dropForeign('identificacion_fk');
			$table->dropForeign('marca_fk');
		});
	}

}
