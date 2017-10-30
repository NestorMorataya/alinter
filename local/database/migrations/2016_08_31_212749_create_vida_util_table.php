<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVidaUtilTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vida_util', function(Blueprint $table)
		{
			$table->integer('vida_util_pk')->primary('vida_util_pk');
			$table->string('bienes', 250)->nullable();
			$table->float('factor_anual', 10, 0)->nullable();
			$table->integer('plazo')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('vida_util');
	}

}
