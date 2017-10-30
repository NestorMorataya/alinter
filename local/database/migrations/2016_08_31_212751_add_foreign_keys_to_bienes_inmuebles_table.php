<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToBienesInmueblesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('bienes_inmuebles', function(Blueprint $table)
		{
			$table->foreign('identificacion_fk', 'identificacion_fk')->references('identificacion_pk')->on('identificacion')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('bienes_inmuebles', function(Blueprint $table)
		{
			$table->dropForeign('identificacion_fk');
		});
	}

}
