<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Model\Category;
use App\Model\Article;
use App\Model\Page;

class MainController extends Controller
{
    //
    public function index(){
        $article = Article::all()->count();
        $hit = Article::sum('hit');
        $category = Category::all()->count();
        $page = Page::all()->count();
        return view('agent.dashboard.index', compact('article', 'hit', 'category', 'page'));
    }
}
