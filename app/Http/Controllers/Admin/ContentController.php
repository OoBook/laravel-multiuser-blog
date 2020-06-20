<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Model\Article;
use App\Model\Category;
use Illuminate\Support\Facades\File;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $articles = Article::orderBy('created_at', 'asc')->get();
        return view('agent.articles.index', compact('articles') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('agent.articles.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'min:3',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:5120',
         ]);
        $article = new Article;
        $article->title = $request->title;
        $article->category = $request->category;
        $article->content = $request->content;
        $article->slug = str_slug($request->title);

        if($request->hasFile('image')){
            $imageName = str_slug($request->title).'.'.$request->image->getClientOriginalExtension();
            $request->image->move( public_path('uploads') , $imageName);
            $article->image = 'uploads/'.$imageName;
        }
        $article->save();

        toastr()->success('Başarılı', 'İçerik Başarıyla Oluşturuldu.');

        return redirect()->back();
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        dd($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $article = Article::findOrFail($id);

        $categories = Category::all();

        return view('agent.articles.edit', compact('categories', 'article'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $request->validate([
            'title' => 'min:3',
            'image' => 'image|mimes:jpeg,png,jpg|max:5120',
         ]);

        $article = Article::findOrFail($id);

        $article->title = $request->title;
        $article->category = $request->category;
        $article->content = $request->content;
        $article->slug = str_slug($request->title);

        if($request->hasFile('image')){
            $imageName = str_slug($request->title).'.'.$request->image->getClientOriginalExtension();
            $request->image->move( public_path('uploads') , $imageName);
            $article->image = 'uploads/'.$imageName;
        }
        $article->save();

        toastr()->success('Başarılı', 'İçerik Başarıyla Güncellendi.');

        return redirect()->back();

    }

    public function changeState(Request $request){
        $article = Article::findOrFail($request->id);
        $article->status = $request->state == "true" ? 1 : 0;
        $article->save();
        return response([
            'status' => true
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function remove(Request $request)
    {
        $article = Article::findOrFail($request->id);
        $article->delete();
        toastr()->success('Başarılı', 'İçerik Geri Dönüşüm Kutusuna Taşındı.');
        return redirect()->back();
    }

    public function trash()
    {
        $articles = Article::onlyTrashed()->orderBy('deleted_at', 'DESC')->get();
        return view('agent.articles.trash', compact('articles'));
    }

    public function recycle($id)
    {
        Article::onlyTrashed()->find($id)->restore();
        toastr()->success('Başarılı', 'İçerik Başarıyla Geri Getirildi.');
        return redirect()->back();
    }

    public function permanentRemove($id)
    {
        $article = Article::onlyTrashed()->find($id);
        if(File::exists($article->image) ){
            File::delete(public_path($article->image));
        }
        $article->forceDelete();
        toastr()->success('Başarılı', 'İçerik Tamamen Kaldırıldı.');
        return redirect()->back();
    }
}
