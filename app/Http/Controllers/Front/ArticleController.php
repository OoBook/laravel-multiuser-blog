<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Model\Category;
use App\Model\Article;

use App\Model\Settings;

class ArticleController extends Controller
{
    //
    public function __construct()
    {   
        if(Settings::find(1)->active == 0){

            return redirect()->to('maintenance')->send();
        }   
    }
    
    public function index($category, $slug){
        // dd($slug);
        $category = Category::whereSlug($category)->first() ?? abort (403, 'Böyle bir kategori bulunamadı.');
        $article = Article::where('status', 1)->whereSlug($slug)->whereCategory($category->id)->first() ?? abort(403, 'Böyle bir yazı bulunmadı.');
        // $article->increment('hit');

        // $data['categories'] = Category::inRandomOrder()->get();
        return view('front.article.index', compact('article', 'category'));
    }
}
