<?php
/**
 * Created by PhpStorm.
 * User: Eduard
 * Date: 22.05.2019
 * Time: 20:33
 */

namespace ishop;


class Registry
	{
		use TSingletone;

		protected static $properties = [];

		public function setProperty($name, $value){
			self::$properties[$name] = $value;
		}

		public function getProperty($name){
			if(isset(self::$properties[$name])){
				return self::$properties[$name];
			}
			return null;
		}

		public function getProprties(){
			return self::$properties;
		}

	}