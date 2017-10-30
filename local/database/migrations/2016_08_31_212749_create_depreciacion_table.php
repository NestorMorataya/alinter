<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDepreciacionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('depreciacion', function(Blueprint $table)
		{
			$table->integer('depreciacion_pk')->primary('depresiacion_pk');
			$table->integer('identificacion_fk')->nullable();
			$table->integer('vida_util_fk')->nullable();
			$table->decimal('valor_residual', 15)->nullable();
			$table->decimal('depreciacion_anual', 15)->nullable();
			$table->decimal('valor_actual', 15)->nullable();
			$table->integer('anios_del_bien')->nullable();
			$table->decimal('depreciacion_acumulada', 15)->nullable();
			$table->decimal('depreciacion_mensual', 15)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('depreciacion');
	}

}
