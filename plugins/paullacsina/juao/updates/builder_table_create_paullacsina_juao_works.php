<?php namespace PaulLacsina\Juao\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreatePaullacsinaJuaoWorks extends Migration
{
    public function up()
    {
        Schema::create('paullacsina_juao_works', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title', 255);
            $table->string('description', 1000);
            $table->string('tagline', 255);
            $table->string('poster', 255);
            $table->string('video', 255);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('paullacsina_juao_works');
    }
}
