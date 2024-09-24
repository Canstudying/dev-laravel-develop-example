<?php
/**
 * Demo02，数据库
 */

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Models\UserModel2;

class Demo02Controller extends BaseController {
	
	//localhost:9601/demo02
    public function index() {
		//$pdo = DB::connection()->getPdo();
		//$user = DB::table('user')->get();
		$user = UserModel::all();
		var_dump($user);
	}
	
}