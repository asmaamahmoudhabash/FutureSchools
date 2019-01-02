<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $slides = Slide::latest()->paginate(10);

        return view('admin.slides.index', compact('slides'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Slide $model)
    {
        //
        return view('admin.slides.create', compact('model'));
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
        $slides = Slide::create($request->all());
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time().''.rand(1111, 99999).'.'.$image->getClientOriginalExtension();
            $img = Image::make($request->file('image'));
            $img->save('uploads/slides/'.$name);
            $slides->image = 'uploads/slides/'.$name;
            $slides->save();
        }

        flash()->success('تم اضافه شريحه بنجاح');

        return redirect('admin/slide');
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
        $model = Slide::findOrFail($id);

        return view('admin.slides.edit', compact('model'));
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

        ]);

        $slides = Slide::findOrFail($id);
        $slides->update($request->all());
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time().''.rand(1111, 99999).'.'.$image->getClientOriginalExtension();
            $img = Image::make($request->file('image'));
            $img->save('uploads/slides/'.$name);
            $slides->image = 'uploads/slides/'.$name;
            $slides->save();
        }

        flash()->success('تم تعديل الشريحه بنجاح ');

        return redirect('admin/slide');
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
        $slides = Slide::findOrFail($id);
        $slides->delete();
        flash()->warning('تم حذف الشريحه بنجاح');

        return back();
    }
}
