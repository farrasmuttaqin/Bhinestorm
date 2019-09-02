<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\ModelUser;
use App\Http\Controllers\LoginUserController;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Carbon;
use Illuminate\Support\Str;

class LoginUserController extends Controller
{

    public function login()
    {
        return view('user/login');
    }

    public function register()
    {
        $users = DB::table('tb_user')->get();
        dump($users);
        return view('user/register', ['users' => $users]);
    }

    public function registerPost(Request $request){

        $access_key = '567f095b092aff4780a903e52a1ab5b1';
        
        $phone_number = $request->userPhone;
        
        $ch = curl_init('http://apilayer.net/api/validate?access_key='.$access_key.'&number='.$phone_number);  
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        
        $json = curl_exec($ch);
        curl_close($ch);
        
        $validationResult = json_decode($json, true);
     
        if ($validationResult['valid']) {
            $join = Carbon\Carbon::now('Asia/Jakarta');
            $join = $join->toDateTimeString();

            $pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

            $hash = substr(str_shuffle(str_repeat($pool, 32)), 0, 32);
            
            $tb_user = new ModelUser;
            $tb_user->userFullname = $request->userFullname;
            $tb_user->userEmail = $request->userEmail;
            $tb_user->userPhone = $request->userPhone;
            $tb_user->userEarlyJoin = $join;
            $tb_user->userPassword = $request->userPassword;
            $tb_user->userHash = $hash;
            $tb_user->userActive = 0;

            $tb_user->save();

            return redirect('/login')->with('status','Register Success!');
        } else {
            echo "Phone number is not valid";
        }
    }

}