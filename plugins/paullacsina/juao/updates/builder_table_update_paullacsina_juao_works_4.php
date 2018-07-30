<?php namespace PaulLacsina\Juao\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePaullacsinaJuaoWorks4 extends Migration
{
    public function up()
    {
        Schema::table('paullacsina_juao_works', function($table)
        {
            $table->string('video', 255)->nullable()->change();
            $table->string('photos', 1000)->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('paullacsina_juao_works', function($table)
        {
            $table->string('video', 255)->nullable(false)->change();
            $table->string('photos', 1000)->nullable(false)->change();
        });
    }
}
