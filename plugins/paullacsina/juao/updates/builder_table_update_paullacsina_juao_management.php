<?php namespace PaulLacsina\Juao\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePaullacsinaJuaoManagement extends Migration
{
    public function up()
    {
        Schema::table('paullacsina_juao_management', function($table)
        {
            $table->integer('order')->nullable()->unsigned();
        });
    }
    
    public function down()
    {
        Schema::table('paullacsina_juao_management', function($table)
        {
            $table->dropColumn('order');
        });
    }
}
