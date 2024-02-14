<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        return 'Hello from UserController';
    }
    /*public function goto(){
        return View('users');
    }*/

    public function show($id){
        $data = array(
            "id" => $id,
            "name" => "Jessica Reighn Gamboa",
            "age" => 21,
            "email" => "jessicagamboa011103@gmail.com"
        );
        return Controllers('UserController'['data => $data']);
    }
}
