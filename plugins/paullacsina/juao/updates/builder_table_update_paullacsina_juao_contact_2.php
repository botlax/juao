<?php namespace PaulLacsina\Juao\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePaullacsinaJuaoContact2 extends Migration
{
    public function up()
    {
        Schema::table('paullacsina_juao_contact', function($table)
        {
            $table->string('email', 100);
            $table->renameColumn('pobox', 'crno');
        });
    }
    
    public function down()
    {
        Schema::table('paullacsina_juao_contact', function($table)
        {
            $table->dropColumn('email');
            $table->renameColumn('crno', 'pobox');
        });
    }
}
