<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Team extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('team', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name', 256)->nullable();
            $table->string('position', 256)->nullable();
            $table->string('image_url', 256)->nullable();
            $table->text('description')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('team');
	}

}
