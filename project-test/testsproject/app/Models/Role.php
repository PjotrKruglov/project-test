<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'role';
    protected $primaryKey='id';

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
