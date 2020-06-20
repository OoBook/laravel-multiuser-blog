<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Model\Category;
use App\Model\Article;
use App\Model\Settings;


class CategoryController extends Controller
{
    //
    public function __construct()
    {   
        if(Settings::find(1)->active == 0){

            return redirect()->to('maintenance')->send();
        }   
    }

    public function index($slug){
        $category = Category::whereSlug($slug)->first() ?? abort (403, 'Böyle bir kategori bulunamadı.');
        $articles = Article::where('status', 1)->whereCategory($category->id)->orderBy('created_at', 'DESC')->paginate(7);
        return view('front.category.index', compact('category', 'articles'));
    }
}
