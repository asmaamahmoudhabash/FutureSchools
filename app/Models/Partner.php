<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected $table = 'partners';
    public $timestamps = true;
    protected $fillable = ['name', 'information', 'published_at', 'image'];
}
