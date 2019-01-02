<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = 'settings';
    public $timestamps = true;
    protected $fillable = ['facebook', 'twitter', 'youtube', 'google_plus', 'instgram', 'address', 'email', 'phone', 'fax', 'latitude', 'longitude', 'welcome_title', 'video', 'website_name', 'website_msg', 'keywords', 'Commitments', 'goals', 'welcome_content',
    ];
}
