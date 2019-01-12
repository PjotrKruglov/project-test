<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question_Quiz;

class Question_QuizController extends Controller
{
    public function add(Request $request) {
        $this->validate($request,[
            'Quiz_ID'=>'required',
            'Question_ID'=>'required'
        ]);
        $Question_Quiz=new Question_Quiz;
        $Question_Quiz->Quiz_ID=$request->Quiz_ID;
        $Question_Quiz->Question_ID=$request->Question_ID;
        $Question_Quiz->save();
		return back();
	}
    public function edit($id)
    {
        $Question_Quiz = Question_Quiz::find($id);
        return View::make('Question_Quiz.edit')
            ->with('Question_Quiz', $Question_Quiz);
    }
    public function updateActor(Request $request, Question_Quiz $Question_Quiz) {
        $Question_Quiz->Quiz_ID=$request->Quiz_ID;
        $Question_Quiz->Question_ID=$request->Question_ID;
        $Question_Quiz->update();
		return redirect('Question_Quiz');
	} 
     public function delete(Question_Quiz $Question_Quiz) {
        $Question_Quiz->delete();
		return redirect('Question_Quizzes');
	} 
}
