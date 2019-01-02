<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Client;
use App\Models\Contact;
use App\Models\Job;
use App\Models\News;
use App\Models\Page;
use App\Models\Partner;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Slide;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $pages = Page::limit(3)->get();
        $slides = Slide::all();
        $services = Service::all();
        $news = News::all();
        $settings = Setting::all();
        $albums = Album::all();
        $clients = Client::all();
        $partners = Partner::all();

        return view('fronts.home', compact('slides', 'services', 'news', 'settings', 'albums', 'clients', 'partners', 'pages'));
    }

    public function service($slug)
    {
        $service = Service::whereSlug($slug)->first();
        $service->views = $service->views + 1;
        $service->save();

        return view('fronts.service', compact('service'));
    }

    public function services()
    {
        $services = Service::paginate(15);

        return view('fronts.services', compact('services'));
    }

    public function post($slug)
    {
        $post = News::whereSlug($slug)->first();
//        select * from posts where slug= $slug
        $post->views = $post->views + 1;
        $post->save();

        return view('fronts.post', compact('post'));
    }

    public function posts()
    {
        $posts = News::paginate(15);

        return view('fronts.posts', compact('posts'));
    }

    public function client()
    {
        //
        $clients = Client::paginate(15);

        return view('fronts.clients', compact('clients'));
    }

    public function album($slug)
    {
        $album = Album::whereSlug($slug)->first();
        $album->views = $album->views + 1;
        $album->save();

        return view('fronts.album', compact('album'));
    }

    public function albums()
    {
        $albums = Album::with('photos')->paginate(15);

        return view('fronts.albums', compact('albums'));
    }

    public function page($id)
    {
        $page = Page::findOrFail($id);
        $page->views = $page->views + 1;
        $page->save();

        return view('fronts.page', compact('page'));
    }

    public function contactus()
    {
        $settings = Setting::all();

        return view('fronts.contact_us', compact('settings'));
    }

    public function contactus2(Request $request)
    {
        $this->validate($request, [
            'name'    => 'required',
            'email'   => 'required',
            'mobile'  => 'required',
            'body'    => 'required',
            'subject' => 'required',
        ]);

        Contact::create($request->all());
        flash()->success('تم ارسال الرسالة بنجاح');

        return back();
    }

    public function job()
    {
        return view('fronts.jobs');
    }

    public function job2(Request $request)
    {
        $this->validate($request, [
            'name'       => 'required',
            'email'      => 'required',
            'mobile'     => 'required',
            'gender'     => 'required',
            'country'    => 'required',
            'city'       => 'required',
            'learn'      => 'required',
            'graduation' => 'required',
            'degree'     => 'required',
            'university' => 'required',

            'experience' => 'required',
            'file'       => 'required',
        ]);

        Job::create($request->all());
        flash()->success('تم استلام الطلب بنجاح');

        return back();
    }

    public function search(Request $request)
    {
        if ($request->input('keyword')) {
            $news = News::where('title', 'LIKE', '%'.trim($request->input('keyword')).'%')
                ->orWhere('content', 'LIKE', '%'.trim($request->input('keyword')).'%')
                ->published()->paginate(10);

            return view('fronts.search', compact('news'));
        } else {
            return back();
        }
    }
}
