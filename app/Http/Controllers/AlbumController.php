<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class AlbumController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $albums = Album::latest()->paginate(10);
        return view('admin.albums.index', compact('albums'));
        
        
        
        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Album $model)
    {
        //
        return view('admin.albums.create', compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
            'published_at' => 'required',
            'image' => 'required',
        ]);
        $albums = Auth::user()->albums()->create($request->except('image'));
        $albums->slug = $albums->title;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time() . '' . rand(1111, 99999) . '.' . $image->getClientOriginalExtension();
            $img = Image::make($request->file('image'));
            $img->save('uploads/albums/' . $name);
            $albums->image = 'uploads/albums/' . $name;
            $albums->save();

        }

        flash()->success('تم اضافه البوم صور بنجاح');
        return redirect('admin/album');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $model = Album::findOrFail($id);
        return view('admin.albums.edit', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
            'published_at' => 'required',
//            'image' => 'required',

        ]);

        $albums = Album::findOrFail($id);
        $albums->update($request->except('image'));
        $albums->slug = $albums->title;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time() . '' . rand(1111, 99999) . '.' . $image->getClientOriginalExtension();
            $img = Image::make($request->file('image'));
            $img->save('uploads/albums/' . $name);
            $albums->image = 'uploads/albums/' . $name;
            $albums->save();
        }

        flash()->success('تم تعديل البوم الصور بنجاح ');
        return redirect('admin/album');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $albums = Album::findOrFail($id);
        $albums->delete();
        flash()->warning("تم حذف البوم الصور بنجاح");
        return back();

    }
}
