<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Article extends Model
{
    protected $table = "articles";
    protected $guarded = [""];

    public function getCreatedAtAttribute($value)
    {
        Carbon::setlocale('fr');
        return \Carbon\Carbon::parse($value)->diffForHumans();
    }

    public function getSummaryAttribute($value)
    {
        return Str::limit($value, 130, '...');
    }
}
