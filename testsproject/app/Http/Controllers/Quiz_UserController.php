<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quiz_User;

class Quiz_UserController extends Controller
{
    public function add(Request $request) {
        $this->validate($request,[
            'Quiz_ID'=>'required',
            'User_ID'=>'required',
            'Date'=>'required',
            'Begin'=>'required'
        ]);
        $Quiz_User=new Quiz_User;
        $Quiz_User->Quiz_ID=$request->Quiz_ID;
        $Quiz_User->User_ID=$request->User_ID;
        $Quiz_User->Date=$request->Date;
        $Quiz_User->Begin=$request->Begin;
        $Quiz_User->save();
		return back();
	}
    public function edit($id)
    {
        $Quiz_User = Quiz_User::find($id);
        return View::make('Quiz_User.edit')
            ->with('Quiz_User', $Quiz_User);
    }
    public function updateActor(Request $request, Quiz_User $Quiz_User) {
        $Quiz_User->Quiz_ID=$request->Quiz_ID;
        $Quiz_User->User_ID=$request->User_ID;
        $Quiz_User->Date=$request->Date;
        $Quiz_User->Begin=$request->Begin;
        $Quiz_User->update();
		return redirect('Quiz_Users');
	} 
     public function delete(Quiz_User $Quiz_User) {
        $Quiz_User->delete();
		return redirect('Quiz_Users');
	}
}
