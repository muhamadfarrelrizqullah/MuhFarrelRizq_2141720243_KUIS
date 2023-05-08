<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataUser;

class UserController extends Controller
{
    public function index(){
        $data = DataUser::all();
        return view('user', ['dataUser' => $data]);
    }
}
