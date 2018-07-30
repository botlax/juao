<?php namespace PaulLacsina\Juao\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreatePaullacsinaJuaoVacancies extends Migration
{
    public function up()
    {
        Schema::create('paullacsina_juao_vacancies', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title', 50);
            $table->string('level', 50);
            $table->string('field', 100);
            $table->integer('branch_id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('paullacsina_juao_vacancies');
    }
}
