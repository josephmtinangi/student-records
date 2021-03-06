<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name','class', 'slug'];
	
	public function getRouteKeyName()
	{
		return 'slug';
	}
}
