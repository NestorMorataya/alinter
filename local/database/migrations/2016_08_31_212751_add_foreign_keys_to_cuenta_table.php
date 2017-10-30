<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCuentaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('cuenta', function(Blueprint $table)
		{
			$table->foreign('rubro_fk', 'rubro_fk')->references('rubro_pk')->on('rubro')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('cuenta', function(Blueprint $table)
		{
			$table->dropForeign('rubro_fk');
		});
	}

}
