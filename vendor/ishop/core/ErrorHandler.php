<?php
/**
 * Created by PhpStorm.
 * User: Eduard
 * Date: 22.05.2019
 * Time: 21:03
 */

namespace ishop;


class ErrorHandler
	{
		public function __construct()
			{
				if(DEBUG){
					error_reporting(-1);
				}else{
					error_reporting(0);
				}
				set_exception_handler([$this, 'exceptionHandler']);

			}
		public function exceptionHandler($e){
			$this->logErrors($e->getMessage(),$e->getFile(),$e->getLine());
			$this_>$this->displayErrror('Исключение',$e->getMessage(),$e->getFile(),$e->getLine(),$e->getCode());
		}

		public function logErrors($messege ='',$file='',$line=''){
			error_log("[".date('Y-m-d H:i:s')."] 
			Текст ошибки: {$messege} | Файл: {$file}| Строка:{$line}\n--------------\n",
				3, ROOT.'/tmp/errors.log');
		}

		public function displayErrror($error,$errstr,$errFile,$errline,$responce=404){
			http_response_code($responce);
			if($responce = 404 && !DEBUG){
				require WWW.'/errors/404.php';
				die;
			}
			if(DEBUG){
				require WWW.'/errors/dev.php';
			}else{
				require WWW.'/errors/prod.php';
			}
			die;
		}
	}