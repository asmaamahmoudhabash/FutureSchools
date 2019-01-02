<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $news = News::latest()->paginate(10);

        return view('admin.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(News $model)
    {
        //
        return view('admin.news.create', compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'title'        => 'required',
            'content'      => 'required',
            'published_at' => 'required',
            'image'        => 'required',
        ]);

        $news = Auth::user()->news()->create($request->except('image'));
        $news->slug = $news->title;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time().''.rand(1111, 99999).'.'.$image->getClientOriginalExtension();
            $img = Image::make($request->file('image'));
            $img->save('uploads/news/'.$name);
            $news->image = 'uploads/news/'.$name;
            $news->save();
        }

        flash()->success('تم اضافه خبر بنجاح');

        return redirect('admin/news');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $model = News::findOrFail($id);

        return view('admin.news.edit', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $this->validate($request, [
            'title'        => 'required',
            'content'      => 'required',
            'published_at' => 'required',
//            'image' => 'required',

        ]);

        $news = News::findOrFail($id);
        //  $request->merge(['slug' => $request->title]);
        // $news->update($request->all());
        $news->update($request->except('image'));
        $news->slug = $news->title;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time().''.rand(1111, 99999).'.'.$image->getClientOriginalExtension();
            $img = Image::make($request->file('image'));
            $img->save('uploads/news/'.$name);
            $news->image = 'uploads/news/'.$name;
            $news->save();
        }

        flash()->success('تم تعديل الخبر بنجاح ');

        return redirect('admin/news');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $news = News::findOrFail($id);
        $news->delete();
        flash()->warning('تم حذف الخبر بنجاح');

        return back();
    }
}
