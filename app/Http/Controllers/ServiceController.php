<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $services = Service::latest()->paginate(10);

        return view('admin.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Service $model)
    {
        //
        return view('admin.services.create', compact('model'));
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
        $services = Auth::user()->services()->create($request->except('image'));
        $services->slug = $services->title;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time().''.rand(1111, 99999).'.'.$image->getClientOriginalExtension();
            $img = Image::make($request->file('image'));
            $img->save('uploads/services/'.$name);
            $services->image = 'uploads/services/'.$name;
            $services->save();
        }

        flash()->success('تم اضافه خدمه بنجاح');

        return redirect('admin/service');
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
        $model = Service::findOrFail($id);

        return view('admin.services.edit', compact('model'));
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

        $services = Service::findOrFail($id);
        $services->update($request->except('image'));
        $services->slug = $services->title;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time().''.rand(1111, 99999).'.'.$image->getClientOriginalExtension();
            $img = Image::make($request->file('image'));
            $img->save('uploads/services/'.$name);
            $services->image = 'uploads/services/'.$name;
            $services->save();
        }

        flash()->success('تم تعديل الخدمه بنجاح ');

        return redirect('admin/service');
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
        $services = Service::findOrFail($id);
        $services->delete();
        flash()->warning('تم حذف الخدمه بنجاح');

        return back();
    }
}
