<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCuentaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cuenta', function(Blueprint $table)
		{
			$table->integer('cuenta_pk')->primary('cuenta_pk');
			$table->integer('rubro_fk')->nullable();
			$table->string('nombre_cuenta', 250)->nullable();
			$table->text('descripcion_cuenta')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cuenta');
	}

}
