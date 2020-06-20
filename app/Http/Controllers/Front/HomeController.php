<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Category;
use App\Model\Article;
use App\Model\Page;
use App\Model\Contact;
use Validator;

use Mail;
use App\Model\Settings;

class HomeController extends Controller
{
    //

    public function __construct()
    {   
        if(Settings::find(1)->active == 0){

            return redirect()->to('maintenance')->send();
        }   
    }
    public function index(){
        // $data['categories'] = Category::inRandomOrder()->get();
        $data['categories'] = Category::where('status', 1)->get();
        $data['articles'] = Article::with('getCategory')->where('status', 1)->whereHas('getCategory', function($query){
            $query->where('status', 1);
        })->orderBy('created_at', 'DESC')->paginate(10);

        $data['banners'] = Article::whereBanner(1)->take(4)->get();
        // dd($data);
        // $data['articles']->withPath(url(''));

        // dd($data['articles'][0]->getCategory);
        // dd($data);
        return view('front.home.index', compact('data'));
    }

    public function page($slug){
        $page = Page::whereSlug($slug)->first() ?? abort(403, 'Böyle bir sayfa bulunamadı');

        if($page->slug == 'iletisim'){

            return $this->contact($page);
        }

        return view('front.home.page', compact('page'));
    }

    public function contact(Page $page){

        return view('front.home.contact', compact('page'));
    }

    public function postContact(Request $request){

        $validate = Validator::make($request->all(), [
            'name' => 'required|min:5',
            'email' => 'required|email',
            'message' => 'required|min:10'
        ]);

        if($validate->errors()){
            return redirect()
            ->route('front.page', ['iletisim'])
            ->withErrors($validate)
            ->withInput();
        }
        // dd($request->post());
        // $contact = new Contact;
        // $contact->name = $request->name;
        // $contact->email = $request->email;
        // $contact->message = $request->message;
        // $contact->save();

        Mail::send([], [], function($message) use($request) {
            $message->from('iletisim@domain.com', 'Blog');
            $message->to('oguzhan.bukcuoglu@gmail.com');
            $message->setBody(' Mesajı Gönderen : '.$request->name.'<br/>
                Mesajı Gönderen Mail : '.$request->email.'<br/>
                Mesaj : '.$request->message.'<br/><br/>
                Gönderim Tarihi : '.$request->created_at.'', 'text/html');
            $message->subject($request->name.' mesaj gönderdi.');
        });

        return redirect()
            ->route('front.page', ['iletisim'])
            ->with('success', 'Mesaj iletildi, teşekkürler.');
    }
}
