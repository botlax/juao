<?php 
use Paullacsina\Juao\Models\Contact;use Paullacsina\Juao\Models\Branch;use Paullacsina\Juao\Models\Vacant;use Paullacsina\Juao\Models\Bg;class Cms5b5ce5b79b4e1547707696_4278b1da17777a0ffe4c37f2f429e0c3Class extends Cms\Classes\PageCode
{
	public function onStart(){
        $this->prepareVars();
    }

    public function prepareVars(){
        
        
        
        

        $qatar = Branch::where('location','Qatar')->first();
        $this['contact'] = $qatar->contact()->first();
        $this['vacancies'] = $qatar->vacant()->get();
        $this['career'] = Bg::where('description','Career')->first();
    }
}
