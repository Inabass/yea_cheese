<?php

namespace App\Http\Controllers;

use resources/photos;
use Illuminate\Http\Request;

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
		//写真の情報を取得
        $mail = $request->input('photo_name');
		
		//日付と投稿者の名前を取得
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