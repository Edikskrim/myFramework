<?php
/**
 * Created by PhpStorm.
 * User: Eduard
 * Date: 30.05.2019
 * Time: 23:26
 */

namespace app\controllers;

use ishop\Cache;

class MainController extends AppController
	{
		public function indexAction(){
				$posts = \R::findAll('test');
				$this->setMeta('Главная страница','Описание', 'Ключивики');
				$name = 'Ed';
				$age = 30;
				$names = ['aaaa','bbbb'];
				$cache = Cache::instance();
//				$cache->delete('test');
				$data = $cache->get('test');
				if(!$data){
					$cache->set('test',$names);
				}
				$this->set(compact('name','age','names','posts'));
		}
	}