<?php
/**
 * Created by PhpStorm.
 * User: Eduard
 * Date: 30.05.2019
 * Time: 23:26
 */

namespace app\controllers;

class MainController extends AppController
	{
		public function indexAction(){
				$this->setMeta('Главная страница','Описание', 'Ключивики');
				$name = 'Ed';
				$age = 30;
				$names = ['aaaa','bbbb'];
				$this->set(compact('name','age','names'));
		}
	}