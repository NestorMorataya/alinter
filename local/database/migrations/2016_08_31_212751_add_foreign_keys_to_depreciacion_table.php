<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDepreciacionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('depreciacion', function(Blueprint $table)
		{
			$table->foreign('identificacion_fk', 'identificacion_fk')->references('identificacion_pk')->on('identificacion')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('vida_util_fk', 'vida_util_fk')->references('vida_util_pk')->on('vida_util')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('depreciacion', function(Blueprint $table)
		{
			$table->dropForeign('identificacion_fk');
			$table->dropForeign('vida_util_fk');
		});
	}

}
