<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Model\Category;
use Illuminate\Validation\Rule;
use App\Model\Article;

class CategoryController extends Controller
{
    //
    public function index(){
        $categories = Category::all();
        return view('agent.categories.index', compact('categories'));
    }


    public function changeState(Request $request){
        $category = Category::findOrFail($request->id);
        $category->status = $request->state == "true" ? 1 : 0;
        $category->save();
        return response([
            'status' => true,
            'state' => $category->status
        ]);
    }

    public function insert(Request $request){
        $isExist = Category::whereSlug(str_slug($request->category) )->first();
        if($isExist){
            toastr()->error($request->category.' Kategorisi Zaten Oluşturulmuş.', 'Başarısız');
            return redirect()->back();
        }
        $category = new Category;
        $category->name = $request->category;
        $category->slug = str_slug($request->category);
        $category->save();
        toastr()->success($category->name.' Kategorisi Oluşturuldu.', 'Başarılı');
        return redirect()->back();
    }

    public function receive(Request $request){
        $category = Category::findOrFail($request->id);
        return response()->json($category);
    }

    public function update(Request $request){
        $request->slug = str_slug($request->name);
        $isSlug = Category::whereSlug($request->slug)->whereNotIn('id', [$request->id])->first();
        $isName = Category::whereName($request->name)->whereNotIn('id', [$request->id])->first();

        if($isSlug or $isName){
            toastr()->error($request->name.' kategorisi zaten var!' );
            return redirect()->back();
        }

        $category = Category::findOrFail($request->id);
        $prev_name = $category->name;
        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->save();
        toastr()->success($prev_name.' kategorisi olarak '.$category->name.' değiştirildi.', 'Başarılı');
        return redirect()->back();
    }

    public function remove(Request $request){
        
        $category = Category::findOrFail($request->category);
        if($category->id == 1){
            toastr()->error($category->name.' kategorisi kaldırılamaz!' );
            return redirect()->back();
        }
        $count = $category->articleCount();
        $name = $category->name;
        if($count > 0){
            Article::whereCategory($category->id)->update(['category' => 1] );
            toastr()->success($name.' kategorisi silindi. İlgili '.$count.' makale '.Category::find(1)->name.' kategorisine taşındı.' , 'Başarılı');
            return redirect()->back();
        }
        $category->delete();
        $category->save();
        toastr()->success($name.' kategorisi silindi.' , 'Başarılı');
        return redirect()->back();
    }
}
