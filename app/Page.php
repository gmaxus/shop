<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
	protected $fillable = [
		'title', 'slug', 'body', 'publication_date',
	];
//
//	public function setTitleAttribute($value)
//	{
//		$this->attributes['title'] = $value;
//		if(empty($this->attributes['slug']))
//			$this->attributes['slug'] = str_slug($value);
//	}

	public function setSlugAttribute($value)
	{
		if(!empty($value)) {
			$this->attributes['slug'] = str_slug($value);
		}else
			$this->attributes['slug'] = str_slug($this->attributes['title']);
	}
}
