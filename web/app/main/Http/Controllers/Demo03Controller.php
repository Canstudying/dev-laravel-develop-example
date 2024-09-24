<?php
/**
 * Demo03，读写文件
 */

namespace App\Http\Controllers;

class Demo03Controller extends BaseController {
	
    public function index() {
		//echo __NAMESPACE__;
		$message = '测试';
		$this->addLog($message);
	}
	
}