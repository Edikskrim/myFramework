<?php
/**
 * Created by PhpStorm.
 * User: Eduard
 * Date: 22.05.2019
 * Time: 20:34
 */

namespace ishop;


trait TSingletone
	{
			private static $instance;

			public static function instance(){
				if(self::$instance === null){
					self::$instance = new self;
				}
				return self::$instance;
			}
	}