<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAuditoriaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('auditoria', function(Blueprint $table)
		{
			$table->integer('auditoria_pk')->primary('auditoria_pk');
			$table->date('fecha')->nullable()->default('now()');
			$table->string('terminal', 50)->nullable();
			$table->string('usuario_fk', 30)->nullable();
			$table->integer('inventario_fk')->nullable();
			$table->integer('ingreso_fk')->nullable();
			$table->integer('traslado_fk')->nullable();
			$table->integer('descargo_fk')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('auditoria');
	}

}
