<?php

namespace App;
use Session;
use DB;
use Illuminate\Database\Eloquent\Model;

class userModel extends Model
{

    public function insertData($info = array()){
        $status='';
            if(!empty($info) && isset($info)){
               $status = DB::table('user_login')
                            ->insert(["name" => $info['name'], "email" => $info['email'] ,"password" => 123]);
                       if($status){
                           return 200;
                       }else{
                           return 401;
                       }

            }else{
                return 401;
            }

    }
}
