<?php namespace PaulLacsina\Juao\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePaullacsinaJuaoBg extends Migration
{
    public function up()
    {
        Schema::table('paullacsina_juao_bg', function($table)
        {
            $table->string('description', 255);
        });
    }
    
    public function down()
    {
        Schema::table('paullacsina_juao_bg', function($table)
        {
            $table->dropColumn('description');
        });
    }
}
