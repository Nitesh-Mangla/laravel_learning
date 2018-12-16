<?php

namespace App\Http\Middleware;
use Session;
use Closure;
use App\userModel;
class LoginAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user_data = array(
        $username = $request->input('username'),
        $pass = $request->input('pass')
        );
            if(!$this->user_auth()){
                if($request->input('submit')){
                    $this->user_exists($user_data);
                }
                //return view('login/login');
            }else{
                return $next($request);
            }

    }

    public function user_exists($data){
        $data = DB::table('user')
            ->where($data)
            ->get();
    }

    public function user_auth(){
        if(Session::get('username')){
            return true;
        }else{
            return false;
        }
    }
}
