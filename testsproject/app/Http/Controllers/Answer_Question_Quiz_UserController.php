<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Answer_Question_Quiz_User;

class Answer_Question_Quiz_UserController extends Controller
{
    public function add(Request $request) {
        $this->validate($request,[
            'Quiz_User_ID'=>'required',
            'Question_ID'=>'required',
            'Answer_ID'=>'required',
            'Begin'=>'required',
            'End'=>'required'
        ]);
        $answer=new Answer_Question_Quiz_User;
        $answer->Quiz_User_ID=$request->Quiz_User_ID;
        $answer->Question_ID=$request->Question_ID;
        $answer->Answer_ID=$request->Answer_ID;
        $answer->Begin=$request->Begin;
        $answer->End=$request->End;
        $answer->save();
		return back();
    }
    public function edit($id)
    {
        $answer = Answer_Question_Quiz_User::find($id);
        return View::make('Answer_Question_Quiz_User.edit')
            ->with('Answer_Question_Quiz_User', $Answer_Question_Quiz_User);
    }
    public function updateActor(Request $request, Question_Quiz $answer) {
        $answer->Quiz_User_ID=$request->Quiz_User_ID;
        $answer->Question_ID=$request->Question_ID;
        $answer->Answer_ID=$request->Answer_ID;
        $answer->Begin=$request->Begin;
        $answer->End=$request->End;
        $answer->update();
		return redirect('Answer_Question_Quiz_Users');
	}
    public function delete(Answer_Question_Quiz_User $Answer_Question_Quiz_User) { 
        $Answer_Question_Quiz_User->delete();
		return redirect('tests');
	} 
}
