<?php namespace PaulLacsina\Juao\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePaullacsinaJuaoWorks2 extends Migration
{
    public function up()
    {
        Schema::table('paullacsina_juao_works', function($table)
        {
            $table->string('client', 100);
        });
    }
    
    public function down()
    {
        Schema::table('paullacsina_juao_works', function($table)
        {
            $table->dropColumn('client');
        });
    }
}
