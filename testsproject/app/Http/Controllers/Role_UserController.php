<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role_User;

class Role_UserController extends Controller
{
    public function add(Request $request) {
        $this->validate($request,[
            'Role_ID'=>'required',
            'User_ID'=>'required',
        ]);
        $Role_User=new Role_User;
        $Role_User->Role_ID=$request->Quiz_ID;
        $Role_User->User_ID=$request->User_ID;
        $Role_User->save();
		return back();
	}
    public function edit($id)
    {
        $Role_User = Role_User::find($id);
        return View::make('Role_User.edit')
            ->with('Role_User', $Role_User);
    }
    public function updateActor(Request $request, Role_User $Role_User) {
        $Role_User->Role_ID=$request->Role_ID;
        $Role_User->User_ID=$request->User_ID;
        $Role_User->update();
		return redirect('Role_Users');
	} 
     public function delete(Role_User $Role_User) {
        $Role_User->delete();
		return redirect('Role_Users');
	}
}
