<?php
	
namespace Paullacsina\Juao\FormWidgets;

use Backend\Classes\FormWidgetBase;
use Config;

class Section extends FormWidgetBase{

	public function widgetDetails(){
		return[
			'name' => 'Section',
			'description' => 'Section'
		];
	}

	public function render(){
		$this->prepareVars();
		//dd($this->vars['cats']);
		return $this->makePartial('widget');
	}

	public function prepareVars(){
		$this->vars['id'] = $this->model->id;
		$this->vars['cats'] = Cat::all()->pluck('name','id')->toArray();
		
		$this->vars['formName'] = $this->formField->getName();

		$this->vars['selected'] = $this->getLoadValue();
	}

	public function getSaveValue($cat){
		if(!is_numeric($cat)){
			$data = [];
			$data['name'] = 'Vegetable';
			$data['slug'] = strtolower(str_replace(' ', '-', $cat));

			$category = new Cat;
			$category->name = $cat;
			$category->slug = strtolower(str_replace(' ', '-', $cat));
			$category->save();

			return $category->id;
		}
		else{
			return $cat;
		}

	}

	public function loadAssets(){
		$this->addCss('css/style.css');
		$this->addJs('js/main.js');
	}

}

?>