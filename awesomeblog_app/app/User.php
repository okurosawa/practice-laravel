<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function is_following($followed_id)
    {
        if ($this->following()->where('followed_id', $followed_id)->count() > 0) {
            return true;
        } else {
            return false;
        }
    }
    public function microposts()
    {
        return $this->hasMany('App\Micropost');
    }

    // // Not working
    // public function likes()
    // {
    //     return $this->hasManyThrough(
    //         'App\Like',
    //         'App\Micropost',
    //         'user_id',
    //         'micropost_id',
    //         'id',
    //         'id'
    //     );
    // }

    public function followers()
    {
        return $this->belongsToMany('App\User', 'follows', 'followed_id', 'follower_id')->withTimestamps();
    }

    public function following()
    {
        return $this->belongsToMany('App\User', 'follows', 'follower_id', 'followed_id')->withTimestamps();
    }
}
