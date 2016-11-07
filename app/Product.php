<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'slug', 'description', 'publication_date', 'visible',
    ];

    public function setPublicationDateAttribute($value)
    {
        if (empty($value))
            $this->attributes['publication_date'] = Carbon::now();
    }

    public function setSlugAttribute($value)
    {
        if(empty($value))
            $this->attributes['slug'] = str_slug($this->attributes['name']);
        else
            $this->attributes['slug'] = str_slug($value);
    }
}
