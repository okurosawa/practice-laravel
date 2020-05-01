<?php

namespace App;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Micropost extends Model
{
    use SoftDeletes;
    protected $fillable = ['user_id', 'content'];

    public function users()
    {
        return $this->belongsTo('App\User');
    }

    public function likes()
    {
        return $this->hanMany('App\Like');
    }
}
