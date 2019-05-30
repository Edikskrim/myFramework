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
				echo __METHOD__;
				$this->setMeta('111','22');
		}
	}