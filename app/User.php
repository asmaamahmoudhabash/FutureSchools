<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];


    public function news()
    {
        return $this->hasMany('App\Models\News');
    }

    public function slides()
    {
        return $this->hasMany('App\Models\Slide');
    }

    public function clients()
    {
        return $this->hasMany('App\Models\Client');
    }

    public function partners()
    {
        return $this->hasMany('App\Models\Partner');
    }

    public function services()
    {
        return $this->hasMany('App\Models\Service');
    }

    public function pages()
    {
        return $this->hasMany('App\Models\Page');
    }

    public function albums()
    {
        return $this->hasMany('App\Models\Album');
    }
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
