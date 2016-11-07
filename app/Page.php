<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
	protected $fillable = [
		'title', 'slug', 'body', 'publication_date',
	];

	public function setPublicationDateAttribute($value)
    {
        if (empty($value))
            $this->attributes['publication_date'] = Carbon::now();
    }

	public function setSlugAttribute($value)
	{
		if(empty($value))
			$this->attributes['slug'] = str_slug($this->attributes['title']);
		else
			$this->attributes['slug'] = str_slug($value);
	}

}
