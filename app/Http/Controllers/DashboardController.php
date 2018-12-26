<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\userModel;
use Session;
class DashboardController extends Controller
{

        public function dashboard(){
            echo "authentication successfully done";
             //return redirect('/');
        }

        public function insert_user_info(Request $request){
                $userData = new userModel();
                $data = array(
                    'name' => $request->name,
                    'email' => $request->email
                );

               $status = $userData->insertData($data);

                echo json_encode($status);
        }

        public function logout(){
            Session::flush();   
            return redirect('/');
        }

}