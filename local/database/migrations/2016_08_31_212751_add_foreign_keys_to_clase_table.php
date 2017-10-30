<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToClaseTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('clase', function(Blueprint $table)
		{
			$table->foreign('catalogo_fk', 'catalogo_fk')->references('catalogo_act_pk')->on('catalogo_activo')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('clase', function(Blueprint $table)
		{
			$table->dropForeign('catalogo_fk');
		});
	}

}
