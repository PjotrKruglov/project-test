<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Answer;

class AnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('answer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'question_id' => 'required',
            'title' => 'required',
            'isTrue' => 'required'
        ]);
        $answer = new Answer([
            'question_id' => $request->get('question_id'),
            'title' => $request->get('title'),
            'isTrue' => $request->get('isTrue')
        ]);
        $question->save();
        return redirect()->route('web.php');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Answer = Answer::find($id);
        return View::make('Answer.edit')
            ->with('Answer', $Answer);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Answer= \App\Answer::find($id);
        $Answer->question_ID=$request->get('question_ID');
        $Answer->title=$request->get('title');
        $Answer->isTrue=$request->get('isTrue');
        $Answer->save();
        return redirect('answers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Answer = \App\Answer::find($id);
        $Answer->delete();
        return redirect('answers')->with('success','Information has been  deleted');
    }
}
