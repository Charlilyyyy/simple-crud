<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Http\Controllers\Controller;
use App\Models\UserData;

class EditController extends Controller
{
    public function edit($id)
    {
        $useredit = UserData::find($id);
        // dd($useredit);
        return view('edit', compact('useredit'));
    }

    public function update(Request $request, $id)
    {
        $userupdate = UserData::find($id);
        $userupdate->name = $request->input('name');
        $userupdate->age = $request->input('age');
        $userupdate->hobby = $request->input('hobby');
        $userupdate->update();

        // return view('homepage',compact('userupdate'));

        return redirect()->back()->with('status','useredit Updated Successfully');
    }

    public function delete($id)
    {
        $userdelete = UserData::find($id);
        $userdelete->delete(); // Easy right?
 
        return redirect()->back()->with('success', 'User removed.'); 
    } 
}
