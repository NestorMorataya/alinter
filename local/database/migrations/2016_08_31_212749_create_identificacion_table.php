<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIdentificacionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('identificacion', function(Blueprint $table)
		{
			$table->integer('identificacion_pk')->primary('identificacion_pk');
			$table->string('clase_fk', 3)->nullable();
			$table->integer('catalogo_fk')->nullable();
			$table->integer('especifico_fk')->nullable();
			$table->string('unidad_fk', 10)->nullable();
			$table->integer('ubicacion_fk')->nullable();
			$table->integer('fuente_fk')->nullable();
			$table->integer('proveedor_fk')->nullable();
			$table->string('correlativo', 6)->nullable();
			$table->date('fecha_adquisicion')->nullable();
			$table->decimal('valor_adquisicion', 15)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('identificacion');
	}

}
