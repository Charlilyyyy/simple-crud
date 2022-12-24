<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\UserData;

class HomePageController extends Controller
{
    public function index(){
        $alluser = UserData::all();

        return view('homepage',compact('alluser'));
    }
}
