<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController2;
use Illuminate\Support\Facades\Log;

class BaseController extends BaseController2 {
	
	/**
	 * 写日志
	 */
    public function addLog($message,$type='other') {
		Log::error($message);
	}
	
}