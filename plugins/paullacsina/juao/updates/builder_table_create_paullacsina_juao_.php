<?php namespace PaulLacsina\Juao\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreatePaullacsinaJuao extends Migration
{
    public function up()
    {
        Schema::create('paullacsina_juao_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('logo', 255);
            $table->string('company', 255);
            $table->string('projects', 1000);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('paullacsina_juao_');
    }
}
