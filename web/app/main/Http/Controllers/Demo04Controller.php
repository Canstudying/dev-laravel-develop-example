<?php
/**
 * Demo04，文件预览
 */

namespace App\Http\Controllers;

class Demo04Controller extends BaseController {
	
    public function index() {
		//echo __NAMESPACE__;
		$message = '测试';
		$this->addLog($message);
	}
	
}