<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Slide extends Model {

	protected $table = 'slides';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];
	protected $fillable = array('title', 'content', 'slug', 'thumbnail', 'views', 'published_at');
	protected $appends = ['human_date'];

	public function getHumanDateAttribute($value)
	{
		Carbon::setLocale('ar');
		if (is_null($this->created_at))
		{
			return $value;
		}
		$value = $this->created_at->diffForHumans(Carbon::now());
		return $value;
	}

	public function setSlugAttribute($value)
	{
		$this->attributes['slug'] = make_slug($value);
	}

	public function scopePublished($q)
	{
		return $q->where('published_at' ,'<' , Carbon::now() );
	}

}