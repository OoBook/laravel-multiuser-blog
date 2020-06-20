<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use SoftDeletes;
    //
    public function getCategory(){
        return $this->hasOne('App\Model\Category', 'id', 'category');
    }

    public function mostPopular(){
        return $this->with('getCategory')->where('status', 1)->whereHas('getCategory', function($query){
            $query->where('status', 1);
        })->orderBy('hit', 'DESC')->take(5)->get();
    }
}
