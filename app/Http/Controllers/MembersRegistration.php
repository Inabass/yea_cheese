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

		if($pass1 == $pass2 )
        	return view('regin');
		else
			return view('regi');
    }

}