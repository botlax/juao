<?php 
use Paullacsina\Juao\Models\Bg;use Paullacsina\Juao\Models\Work;use Paullacsina\Juao\Models\Social;class Cms5b5f21c4e9c32047056013_55cec831f6d2335cf60726b2486df9a9Class extends Cms\Classes\PageCode
{
public function onStart(){
        $this->prepareVars();
    }

    public function prepareVars(){
        
        
        


        $this['front'] = Bg::where('description','Frontpage')->first();
        $this['principle'] = Bg::where('description','Principle')->first();
        
        $this['socials'] = Social::all();

        $this['qWorks'] = Work::whereHas('branch',function($query){
        	$query->where('location','Qatar');
    	})->orderBy('order','ASC')->get();

    	$this['uWorks'] = Work::whereHas('branch',function($query){
        	$query->where('location','UAE');
    	})->orderBy('order','ASC')->get();

    	$this['logo'] = Session::get('logo');

    }
}
