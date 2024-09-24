<?php
/**
 * Demo01，通用
 */

namespace App\Http\Controllers;

class Demo08ontroller extends BaseController {
	
    public function index() {
		//echo __NAMESPACE__;
		$message = '测试';
		$this->addLog($message);
	}
	
}