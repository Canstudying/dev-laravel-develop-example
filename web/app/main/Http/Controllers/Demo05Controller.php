<?php
/**
 * Demo05，SESSION、COOKIE
 */

namespace App\Http\Controllers;

class Demo05Controller extends BaseController {
	
    public function index() {
		//echo __NAMESPACE__;
		$message = '测试';
		$this->addLog($message);
	}
	
}