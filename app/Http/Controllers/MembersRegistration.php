<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MembersRegistration extends Controller
{
    /**
     * 指定ユーザーのプロフィール表示
     *
     * @param  int  $id
     * @return Response
     */
    public function regin(Request $request)
    {
        $mail = $request->input('user_name');
        $pass1 = $request->input('user_password1');
		$pass2 = $request->input('user_password2');		
		
		$user = DB::table('userdb')->where('mailad', $mail)->first();
		
		if($user == null){
			if($pass1 == $pass2 ){
				if(preg_match('/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/iD', $mail)){
					$has = hash('sha256', $pass1);
		
					DB::table('userdb')->insert(
						['mailad' => $mail, 'password' => $has]
					);
			
					return view('regin');
				}
				else
					return view('e3'); //メールアドレスが正しく無い
			}
			else
				return view('e2'); //パスワードが正しく無い
		}
		else
			return view('e1'); //メールアドレスが使われている
    }

}