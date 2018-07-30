<?php namespace PaulLacsina\Juao\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePaullacsinaJuaoClients2 extends Migration
{
    public function up()
    {
        Schema::table('paullacsina_juao_clients', function($table)
        {
            $table->integer('order')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::table('paullacsina_juao_clients', function($table)
        {
            $table->dropColumn('order');
        });
    }
}
