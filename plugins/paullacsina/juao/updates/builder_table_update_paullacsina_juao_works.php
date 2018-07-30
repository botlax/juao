<?php namespace PaulLacsina\Juao\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePaullacsinaJuaoWorks extends Migration
{
    public function up()
    {
        Schema::table('paullacsina_juao_works', function($table)
        {
            $table->integer('branch_id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::table('paullacsina_juao_works', function($table)
        {
            $table->dropColumn('branch_id');
        });
    }
}
