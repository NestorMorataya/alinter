<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUsuariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('usuarios', function(Blueprint $table)
		{
			$table->foreign('tipo_usuario', 'tipo_usuario')->references('"tipoUsuario_pk"')->on('tipo_usuario')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('unidad', 'unidad')->references('unidad_pk')->on('unidad')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('usuarios', function(Blueprint $table)
		{
			$table->dropForeign('tipo_usuario');
			$table->dropForeign('unidad');
		});
	}

}
