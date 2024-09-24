<?php
/**
 * Demo06，序列化
 */

namespace App\Http\Controllers;

class Demo06Controller extends BaseController {
	
    public function index() {
		//echo __NAMESPACE__;
		$message = '测试';
		$this->addLog($message);
	}
	
}