<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserData;

class UserDataController extends Controller
{
    public function store(Request $request){
        $userdata = new UserData;
        $userdata->name = $request->name;
        $userdata->age = $request->age;
        $userdata->hobby = $request->hobby;
        $userdata->save();

        return view('success',compact('userdata'));
    }
}
