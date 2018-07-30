<?php namespace PaulLacsina\Juao\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreatePaullacsinaJuaoContact extends Migration
{
    public function up()
    {
        Schema::create('paullacsina_juao_contact', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('address', 500);
            $table->string('tel', 50);
            $table->string('fax', 50);
            $table->string('pobox', 20);
            $table->string('lat', 50);
            $table->string('long', 50);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('paullacsina_juao_contact');
    }
}
