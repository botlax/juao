<?php 
use Paullacsina\Juao\Models\Social;class Cms5b5f21d491ffc075425099_886628313e24667a72f004ab1b9f74c7Class extends Cms\Classes\LayoutCode
{
 
	public function onStart(){
        $this->prepareVars();
    }

    public function prepareVars(){
        

        $this['social'] = Social::all();

        $this['logo'] = 'Logos/logo'.rand(1,8).'.png';
        
    }
}
