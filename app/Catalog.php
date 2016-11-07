<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

class Catalog extends Model
{
    use NodeTrait;

    protected $fillable = [
        'name', 'slug', 'visible'
    ];

    public function setSlugAttribute($value)
    {
        if(empty($value))
            $this->attributes['slug'] = str_slug($this->attributes['name']);
        else
            $this->attributes['slug'] = str_slug($value);
    }

}
