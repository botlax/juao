<?php namespace PaulLacsina\Juao\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreatePaullacsinaJuaoBranch extends Migration
{
    public function up()
    {
        Schema::create('paullacsina_juao_branch', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('location', 255);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('paullacsina_juao_branch');
    }
}
