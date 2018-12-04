<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactenosTable extends Migration
{
    /**
* Run the migrations.
*
* @return void
*/
public function up()
{
Schema::create('contactenos', function (Blueprint $table) { $table->increments('id'); $table->string('nombre'); $table->string('email'); $table->text('mensaje'); $table->timestamps(); });
}
 
/**
* Reverse the migrations.
*
* @return void
*/
public function down()
{
Schema::drop("contactenos");
}
}
