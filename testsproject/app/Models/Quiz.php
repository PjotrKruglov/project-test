<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected $table = 'quiz';
    protected $primaryKey='id';

    public function getQuestions()
    {
        $questions = array();

        return $questions;
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function questions()
    {
        return $this->belongsToMany('App\Models\Qustion');
    }
}
