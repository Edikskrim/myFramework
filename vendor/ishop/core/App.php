<?php
/**
 * Created by PhpStorm.
 * User: Eduard
 * Date: 22.05.2019
 * Time: 20:25
 */

namespace ishop;


class App
	{
		public static $app;

		public function __construct()
			{
				$query = trim($_SERVER['QUERY_STRING'],'/');
				session_start();
				self::$app = Registry::instance();
				$this->getParams();
				new ErrorHandler();
				Router::dispatch($query);
			}
		protected function getParams(){
			$params = require_once CONF.'/params.php';
			if(!empty($params)){
				foreach ($params as $key => $value){
					self::$app->setProperty($key,$value);
				}
			}
		}
	}