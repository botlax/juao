<?php namespace PaulLacsina\Juao\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreatePaullacsinaJuaoSocial extends Migration
{
    public function up()
    {
        Schema::create('paullacsina_juao_social', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('platform', 255);
            $table->string('link', 255);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('paullacsina_juao_social');
    }
}
