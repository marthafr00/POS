<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function list($id, $name){
        return "This registered $id has name $name";
    }
}
