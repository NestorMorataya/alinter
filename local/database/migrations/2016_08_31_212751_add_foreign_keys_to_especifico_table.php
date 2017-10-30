<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEspecificoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('especifico', function(Blueprint $table)
		{
			$table->foreign('cuenta_fk', 'cuenta_fk')->references('cuenta_pk')->on('cuenta')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('especifico', function(Blueprint $table)
		{
			$table->dropForeign('cuenta_fk');
		});
	}

}
