<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProveedorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('proveedor', function(Blueprint $table)
		{
			$table->integer('proveedor_pk')->primary('proveedor_pk');
			$table->string('nombre_proveedor', 100)->nullable();
			$table->string('telefono_proveedor', 15)->nullable();
			$table->text('direccion_proveedor')->nullable();
			$table->string('correo', 250)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('proveedor');
	}

}
