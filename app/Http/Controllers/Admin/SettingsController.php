<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Model\Settings;
use App\Model\Article;


class SettingsController extends Controller
{
    //
    public function index(){
        $settings = Settings::find(1);
        return view('agent.settings.index', compact('settings') );
    }

    public function update(Request $request){
        $settings = Settings::find(1);
        // dd($request->post());
        $settings->title = $request->title;
        $settings->active = $request->active ;
        $settings->facebook = $request->facebook ;
        $settings->twitter = $request->twitter ;
        $settings->youtube = $request->youtube ;
        $settings->linkedin = $request->linkedin ;
        $settings->instagram = $request->instagram ; 
        $settings->github = $request->github ;

        if($request->hasFile('logo')){
            $logo = str_slug($request->title).'-logo.'.$request->logo->getClientOriginalExtension();
            $request->logo->move(public_path('uploads'), $logo);
            $settings->logo = 'uploads/'.$logo;
        }

        if($request->hasFile('favicon')){
            $favicon = str_slug($request->title).'-favicon.'.$request->favicon->getClientOriginalExtension();
            $request->favicon->move(public_path('uploads'), $favicon);
            $settings->favicon = 'uploads/'.$favicon;
        }
        $settings->save();

        toastr()->success('Site Ayarları Başarıyla Güncellendi.');
        return redirect()->back();
    }

    public function banner(){
        $settings = Settings::find(1);
        $articles = Article::orderBy('banner', 'DESC')->orderBy('created_at', 'DESC')->get();
        return view('agent.settings.banner', compact('settings', 'articles') );
    }

    public function bannerUpdate(Request $request){

        foreach ($request->fields as $key => $value) {
            $article = Article::find($value);
            $article->banner = 1;
            $article->save();
        }
        return redirect()->back();
    }
}
