<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class Job extends Model {

	protected $table = 'jobs';
	public $timestamps = true;

	
	protected $fillable = array('name', 'email', 'mobile', 'gender', 'country', 'city', 'learn', 'graduation', 'degree', 'university', 'experience', 'file');


}