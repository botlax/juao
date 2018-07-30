<?php 
use Paullacsina\Juao\Models\Work;class Cms5b5f21e42e77a517085033_4f3a78a20d0b0f7cba4ff8dd0f85c166Class extends Cms\Classes\PageCode
{
	public function onStart(){
        $this->prepareVars();
    }

    public function prepareVars(){
        

        $this['works'] = Work::orderBy('order','ASC')->get();

    }
}
