<?php namespace PaulLacsina\Juao\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePaullacsinaJuaoWorks5 extends Migration
{
    public function up()
    {
        Schema::table('paullacsina_juao_works', function($table)
        {
            $table->integer('order')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::table('paullacsina_juao_works', function($table)
        {
            $table->dropColumn('order');
        });
    }
}
