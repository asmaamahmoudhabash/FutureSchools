<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model {

	protected $table = 'services';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];
	protected $fillable = array('title', 'content', 'slug', 'image', 'views', 'published_at');
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
		$this->attributes['slug'] = $this->make_slug($value);
	}

	
	public function scopePublished($q)
	{
		return $q->where('published_at' ,'<' , Carbon::now() );
	}

	public function make_slug($string = null, $separator = "-")
	{
		if (is_null($string)) {
			return "";
		}
		// Remove spaces from the beginning and from the end of the string
		$string = trim($string);
		// Lower case everything
		// using mb_strtolower() function is important for non-Latin UTF-8 string | more info: http://goo.gl/QL2tzK
		$string = mb_strtolower($string, "UTF-8");;
		// Make alphanumeric (removes all other characters)
		// this makes the string safe especially when used as a part of a URL
		// this keeps latin characters and arabic charactrs as well
		$string = preg_replace("/[^a-z0-9_\s-ءاأإآؤئبتثجحخدذرزسشصضطظعغفقكلمنهويةى]/u", "", $string);
		// Remove multiple dashes or whitespaces
		$string = preg_replace("/[\s-]+/", " ", $string);
		// Convert whitespaces and underscore to the given separator
		$string = preg_replace("/[\s_]/", $separator, $string);
		return $string;
	}


}