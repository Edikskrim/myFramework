<?php


namespace ishop;
use mysql_xdevapi\Exception;
use RedBeanPHP\R;

class Db
	{
		use TSingletone;

		protected  function __construct(){
				$db = require_once CONF.'/dbconfig.php';
				class_alias('\RedBeanPHP\R','\R');
				\R::setup($db['dsn'],$db['user'],$db['pass']);
				if (!\R::testConnection()){
					throw new \Exception('Нет соединения с бд',500);
				}
				\R::freeze(true);
				if(DEBUG){
					\R::debug(true,1);
				}
		}
	}