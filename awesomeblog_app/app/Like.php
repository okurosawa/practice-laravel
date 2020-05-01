<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Like extends Model
{
    use SoftDeletes;

    public function microposts()
    {
        return $this->belongsTo('App\Micropost');
    }
}
