<?php namespace PaulLacsina\Juao\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePaullacsinaJuaoWorks3 extends Migration
{
    public function up()
    {
        Schema::table('paullacsina_juao_works', function($table)
        {
            $table->string('photos', 1000);
            $table->string('mode', 10);
        });
    }
    
    public function down()
    {
        Schema::table('paullacsina_juao_works', function($table)
        {
            $table->dropColumn('photos');
            $table->dropColumn('mode');
        });
    }
}
