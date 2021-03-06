<?php

namespace App\Http\Middleware;
use Session;

use Illuminate\Html\Request;
use Closure;
use App\userModel;
use Illuminate\Support\Facades\Input;
use DB;
use Validator;
class LoginAuth
{
    public function handle($request, Closure $next)
    {
 
        $user_data = array(
        'email' => $request->get('username'),
        'password' => $request->get('pass')
        );

            if(!$this->user_auth()){
                if($request->input('submit')){
                    $result =  $this->user_exists($user_data);
                       if($result['ok'] == '200'){
                           return $next($request);
                       }else{

                           return redirect('/')->with(['errors' => $result]);
                       }
                }
                return $next($request);
            }else{
                return $next($request);
            }
    }

    public function user_exists($data){

        $data = DB::table('user_login')
            ->where($data)
            ->get();

        if(count($data) > 0){
            Session::put('username',$data[0]->email);
            $status['ok'] = 200;
        }else{
            $status['ok'] = '';
            $status['msg'] = "Please enter Username and password correct";
        }
        return $status;

}
    

    public function user_auth(){
        if(Session::get('username')){
            return true;
        }else{
            return false;
        }
    }
}