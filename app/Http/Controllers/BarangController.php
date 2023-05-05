<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;

class BarangController extends Controller
{
    public function index(){
        $data = Data::all();
        return view('data', ['dataBarang' => $data]);
    }
}
