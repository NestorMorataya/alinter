<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFaseTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fase', function(Blueprint $table)
		{
			$table->integer('fase_pk')->primary('fase_pk');
			$table->string('fase', 30)->nullable();
			$table->text('descripcion_fase')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('fase');
	}

}
