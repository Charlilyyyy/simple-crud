<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\UserData;

class ReadController extends Controller
{
    public function view($id){
        $userview = UserData::find($id);
        return view('view', compact('userview'));
    }
}
