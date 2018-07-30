<?php 
use Paullacsina\Juao\Models\Client;class Cms5b5cd6cc38965856753261_9cd87d6a6b3e730dad436e98dd476fadClass extends Cms\Classes\PageCode
{
	public function onStart(){
        $this->prepareVars();
    }

    public function prepareVars(){
        

        $this['clients'] = Client::orderBy('order', 'ASC')->get();

    }
}
