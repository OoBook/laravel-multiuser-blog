<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;


class Category extends Model
{

    //
    public function articleCount(){
        # code...
        return $this->hasMany('App\Model\Article',  'category','id')->where('status', 1)->count();
    }

    public function articles(){
        # code...
        return $this->hasMany('App\Model\Article',  'category', 'id');
    }

    public function popularArticles(){
        # code...
        return $this->hasMany('App\Model\Article',  'category', 'id')->where('status', 1)->orderBy('hit', 'DESC')->take(1)->get();
    }

    public function limitArticles($number){
        # code...
        return $this->hasMany('App\Model\Article',  'category', 'id')->where('status', 1)->orderBy('created_at', 'DESC')->take($number)->get();
    }

    public function rules() {
        return [
            'slug' => ['required', 'string', 'max:255',
                Rule::unique('categories')->ignore($this->category),
            ],
        ];
    }
}
