<?php namespace PaulLacsina\Juao\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreatePaullacsinaJuaoBg extends Migration
{
    public function up()
    {
        Schema::create('paullacsina_juao_bg', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('photo', 255);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('paullacsina_juao_bg');
    }
}
