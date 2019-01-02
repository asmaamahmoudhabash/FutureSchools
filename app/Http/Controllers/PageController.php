<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pages = Page::latest()->paginate(20);
        return view('admin.pages.index',compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Page $model)
    {
        //
        return view('admin.pages.create',compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'title' => 'required',
            'published_at' => 'required',
            'image' => 'required'
        ]);

        $pages = Page::create($request->all());
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time() . '' . rand(1111, 99999) . '.' . $image->getClientOriginalExtension();
            $img = Image::make($request->file('image'));
            $img->save('uploads/pages/' . $name);
            $pages->image = 'uploads/pages/' . $name;
            $pages->save();
        }

        flash()->success('تم اضافه صفحه بنجاح');
        return redirect('admin/page');
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
        $model = Page::findOrFail($id);
        return view('admin.pages.edit',compact('model'));
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
        $this->validate($request, [
            'title' => 'required',
            'published_at' => 'required',
//            'image'=>'required'
        ]);

        $pages = Page::findOrFail($id);
        $pages->update($request->all());
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time() . '' . rand(1111, 99999) . '.' . $image->getClientOriginalExtension();
            $img = Image::make($request->file('image'));
            $img->save('uploads/pages/' . $name);
            $pages->image = 'uploads/pages/' . $name;
            $pages->save();
        }

        flash()->success('تم تعديل الصفحه بنجاح ');
        return redirect('admin/page');
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

        $pages = Page::findOrFail($id);
        $pages->delete();
        flash()->warning("تم حذف الصفحه بنجاح");
        return back();
    }
}
