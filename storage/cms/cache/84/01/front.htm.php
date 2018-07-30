<?php 
use Paullacsina\Juao\Models\Social;class Cms5b5f21a88ee91614112028_f8b4258d8b952d96b05f93b243e176d5Class extends Cms\Classes\LayoutCode
{
 
	public function onStart(){
        $this->prepareVars();
    }

    public function prepareVars(){
        

        $this['social'] = Social::all();

        $this['logo'] = 'Logos/logo'.rand(1,8).'.png';
        Session::put('logo', $this['logo']);
        
    }
}
