<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'question';
    protected $primaryKey='id';

    public function answers() 
    {
        return $this->belongsToMany(Answer::class)->withPivot('cast');
    }

    public function empty()
    {
        
    }
}
