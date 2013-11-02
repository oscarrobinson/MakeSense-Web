<?php
ini_set('display_errors', 'On');
Class View
{
	private $model;
	private $controller;

	 public function __construct($controller,$model) {
        $this->controller = $controller;
        $this->model = $model;
    }

    public function output(){
        $stringsArray=$this->model->getRandomStrings();
        $output = "";
        foreach($stringsArray as $string)
        {
        	$output = $output.$string."<br />";
        }
        return $output;
    }

}

?>