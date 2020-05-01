<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vote extends Model
{
    use SoftDeletes;

    protected $fillable = ['suggestion_id'];

    public function suggestion()
    {
        return $this->belongsTo('App\Suggestion');
    }
}
