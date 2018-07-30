<?php namespace PaulLacsina\Juao\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreatePaullacsinaJuaoManagement extends Migration
{
    public function up()
    {
        Schema::create('paullacsina_juao_management', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 255);
            $table->string('position', 255);
            $table->string('bio', 1000);
            $table->string('photo', 255);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('paullacsina_juao_management');
    }
}
