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
        $mail = $request->input('user_name');
        $pass = $request->input('user_password');
		
		$has = hash('sha256', $pass);
		
		$hass = hash('sha256', '123');
		

		if($mail == 321 && $has == $hass)
        	return view('sigin');
		else
			return view('login');
    }

}