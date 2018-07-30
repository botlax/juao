<?php 
use Paullacsina\Juao\Models\Bg;use Paullacsina\Juao\Models\Management;use Paullacsina\Juao\Models\Award;class Cms5b5cd1609b9ae674874283_d2cd649f8c83312fcc80e0995007ff1aClass extends Cms\Classes\PageCode
{
	public function onStart(){
        $this->prepareVars();
    }

    public function prepareVars(){
        
        
        

        $this['principle'] = Bg::where('description','Principle')->first();
        $this['facts'] = Bg::where('description','Facts')->first();
        $this['team'] = Bg::where('description','Team')->first();
        $this['management'] = Management::orderBy('order','ASC')->get();
        $this['awards'] = Award::all();

    }
}
