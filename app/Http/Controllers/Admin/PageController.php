<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Model\Page;
use File;

class PageController extends Controller
{
    //
    public function index(){
        $pages = Page::all();
        return view('agent.pages.index', compact('pages'));

    }

        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pages = Page::orderBy('order', 'asc')->get();
        return view('agent.pages.create', compact('pages'));
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

        $order = Page::orderBy('order', 'desc')->first()->order + 1;

        $page = new Page;
        $page->title = $request->title;
        $page->content = $request->content;
        $page->slug = str_slug($request->title);
        $page->order = $order;

        if($request->hasFile('image')){
            $imageName = str_slug($request->title).'.'.$request->image->getClientOriginalExtension();
            $request->image->move( public_path('uploads') , $imageName);
            $page->image = 'uploads/'.$imageName;
        }
        $page->save();

        toastr()->success('Başarılı', 'Sayfa Başarıyla Oluşturuldu.');

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
        $page = page::findOrFail($id);

        return view('agent.pages.edit', compact('page'));

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

        $page = Page::findOrFail($id);

        $page->title = $request->title;
        $page->content = $request->content;
        $page->slug = str_slug($request->title);

        if($request->hasFile('image')){
            $imageName = str_slug($request->title).'.'.$request->image->getClientOriginalExtension();
            $request->image->move( public_path('uploads') , $imageName);
            $page->image = 'uploads/'.$imageName;
        }
        $page->save();

        toastr()->success('Başarılı', 'Sayfa Başarıyla Güncellendi.');

        return redirect()->back();

    }

    public function changeState(Request $request){
        $page = Page::findOrFail($request->id);
        $page->status = $request->state == "true" ? 1 : 0;
        $page->save();
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
        $page = page::findOrFail($request->id);
        if(File::exists($page->image) ){
            File::delete(public_path($page->image));
        }
        $page->delete();
        toastr()->success('Başarılı', 'Sayfa Geri Dönüşüm Kutusuna Taşındı.');
        return redirect()->back();
    }

    public function trash()
    {
        $articles = page::onlyTrashed()->orderBy('deleted_at', 'DESC')->get();
        return view('agent.articles.trash', compact('articles'));
    }

    public function recycle($id)
    {
        page::onlyTrashed()->find($id)->restore();
        toastr()->success('Başarılı', 'İçerik Başarıyla Geri Getirildi.');
        return redirect()->back();
    }

    public function permanentRemove($id)
    {
        $page = page::onlyTrashed()->find($id);
        if(File::exists($page->image) ){
            File::delete(public_path($page->image));
        }
        $page->forceDelete();
        toastr()->success('Başarılı', 'İçerik Tamamen Kaldırıldı.');
        return redirect()->back();
    }
    
    public function sort(Request $request){
        $orders = $request->get('page');
        foreach($orders as $key => $order){
            Page::where('id', $order)->update(['order'=> $key]);
        }
    }
}
