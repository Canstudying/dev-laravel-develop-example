<?php
/**
 * 测试控制器
 */

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use App\Http\Models\UserModel;

class TestController extends BaseController
{
    
	public function test() {
		//$user = DB::table('users2')->get();
		//var_dump($user);
		$user = UserModel2::all();
	}
	
}
