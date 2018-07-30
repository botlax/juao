<?php namespace PaulLacsina\Juao\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreatePaullacsinaJuaoAwards extends Migration
{
    public function up()
    {
        Schema::create('paullacsina_juao_awards', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('award');
            $table->text('photo');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('paullacsina_juao_awards');
    }
}
