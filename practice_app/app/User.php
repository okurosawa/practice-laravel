<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    private $first_name;
    private $last_name;
    private $email;
    private $description;

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
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

    public function getName()
    {
        $name = "Osamu Kurosawa";
        return $name;
    }

    public function getProfile()
    {
        $profile = [
            "name" => "Osamu Kurosawa",
            "birthdate" => "1995-06-03"
        ];

        return $profile;
    }

    public function setBookData($first_name, $last_name, $email, $description)
    {
        $this->first_name  = $first_name;
        $this->last_name   = $last_name;
        $this->email       = $email;
        $this->description = $description;

        return true;
    }
}
