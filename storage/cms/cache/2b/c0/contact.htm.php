<?php 
use Paullacsina\Juao\Models\Contact;use Paullacsina\Juao\Models\Branch;class Cms5b5f0db36d188792225104_77973621efe6df914f06eeb8d32c6a1eClass extends Cms\Classes\PageCode
{
	public function onStart(){
        $this->prepareVars();
    }

    public function prepareVars(){
        
        

        $this['branches'] = Branch::all();
        $this['contactBg'] = ['#472F8C', '#16A6DF', '#FCB420', '#CCDB2B'];
    }
}
