<?php

use Illuminate\Database\Migrations\Migration;

class CreateMultaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('multa', function($table)
		{
			$table->increments('id');
			$table->string('infracao', 45);
                        $table->integer('ponto');
                        $table->string('penalidade', 45);
                        $table->decimal('valor', 10, 2);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('multa');
	}

}
