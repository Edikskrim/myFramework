<?php
/**
 * Created by PhpStorm.
 * User: Eduard
 * Date: 30.05.2019
 * Time: 23:49
 */

namespace ishop\base;


use ishop\App;

class View
	{
		public $route;
		public $controller;
		public $model;
		public $view;
		public $prefix;
		public $layout;
		public $data = [];
		public $meta = [];

		public function __construct($route, $layout = '', $view = '', $meta )
			{
				$this->route = $route;
				$this->controller = $route['controller'];
				$this->model = $route['controller'];
				$this->view = $view;
				$this->prefix = $route['prefix'];
				$this->meta = $meta;
				if($layout === false){
					$this->layout = false;
				}else{
					$this->layout = $layout ?: LAYOUT;
				}
			}

			public function render($data){
		        if(is_array($data)) extract($data);
                $viewFile = APP."/views/{$this->prefix}{$this->controller}/{$this->view}.php";
                if(is_file($viewFile)){
                    ob_start();
                    require_once $viewFile;
                    $content = ob_get_clean();
                }else{
                    throw new \Exception("Не найден вид ($viewFile)", 500);
                }
                if(false !== $this->layout){
                    $layoutFile = APP."/views/layouts/{$this->layout}.php";
                    if(is_file($layoutFile)){
                        require_once $layoutFile;
                    }else{
                        throw new \Exception("Не найден шаблон ($layoutFile)", 500);
                    }
                }
            }

            public function getTitle(){
                $output = '<title>'.$this->meta['title'].'</title>';
                return $output;
            }
            public function getDescription(){
                $output = '<meta name="description" content="'.$this->meta['description'].'">';
                return $output;
            }
            public function getKeywords(){
                $output = '<meta name="keywords" content="'.$this->meta['keywords'].'">';
                return $output;
            }
	}