<?php namespace PaulLacsina\Juao\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePaullacsinaJuaoClients extends Migration
{
    public function up()
    {
        Schema::rename('paullacsina_juao_', 'paullacsina_juao_clients');
    }
    
    public function down()
    {
        Schema::rename('paullacsina_juao_clients', 'paullacsina_juao_');
    }
}
