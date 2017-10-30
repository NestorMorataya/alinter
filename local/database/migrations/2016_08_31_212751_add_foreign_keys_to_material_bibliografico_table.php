<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToMaterialBibliograficoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('material_bibliografico', function(Blueprint $table)
		{
			$table->foreign('autor_fk', 'autor_fk')->references('autor_pk')->on('autor')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('identificacion_fk', 'identificacion_fk')->references('identificacion_pk')->on('identificacion')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('material_bibliografico', function(Blueprint $table)
		{
			$table->dropForeign('autor_fk');
			$table->dropForeign('identificacion_fk');
		});
	}

}
