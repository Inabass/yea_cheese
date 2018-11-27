<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MembersController extends Controller
{
    /**
     * 指定ユーザーのプロフィール表示
     *
     * @param  int  $id
     * @return Response
     */
    public function sigin(Request $request)
    {
		//メールアドレスを取得
        $mail = $request->input('user_name');
		
		//パスワードを取得
        $pass = $request->input('user_password');
		
		//取得したパスワードをハッシュ化
		$passh = hash('sha256', $pass);
		
		//
		$user = DB::table('userdb')->where('mailad', $mail)->first();
		
		if(is_null($user)){
				return view('e4');
		}
		
		$has = $user->password;
		
		//パスワード照合
		if($passh == $has)
        	return view('sigin');
		
		return view('e4');
    }

}