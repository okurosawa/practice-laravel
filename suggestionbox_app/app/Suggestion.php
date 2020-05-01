<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Suggestion extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    // White list
    protected $fillable = ['content', 'author'];

    public function votes()
    {
        return $this->hasMany('App\Vote');
    }
}
