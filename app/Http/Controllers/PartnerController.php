<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;

use App\Http\Requests;
use Intervention\Image\Facades\Image;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $partners = Partner::latest()->paginate(10);
        return view('admin.partners.index', compact('partners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Partner $model)
    {
        //
        return view('admin.partners.create', compact('model'));
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
            'name' => 'required',
            'information' => 'required',
            'published_at' => 'required',
//          'image' => 'required|image|mimes:png,jpeg,jpg',
            'image' => 'required',
        ]);
        $partners = Partner::create($request->all());
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time() . '' . rand(1111, 99999) . '.' . $image->getClientOriginalExtension();
            $img = Image::make($request->file('image'));
            $img->save('uploads/partners/' . $name);
            $partners->image = 'uploads/partners/' . $name;
            $partners->save();
        }

        flash()->success('تم اضافه شريك بنجاح');
        return redirect('admin/partner');
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
        $model = Partner::findOrFail($id);
        return view('admin.partners.edit', compact('model'));
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
            'name' => 'required',
            'information' => 'required',
            'published_at' => 'required',
//            'image' => 'required'

        ]);

        $partner = Partner::findOrFail($id);
        $partner->update($request->all());
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time() . '' . rand(1111, 99999) . '.' . $image->getClientOriginalExtension();
            $img = Image::make($request->file('image'));
            $img->save('uploads/partners/' . $name);
            $partner->image = 'uploads/partners/' . $name;
            $partner->save();
        }

        flash()->success('تم تعديل الشريك بنجاح ');
        return redirect('admin/partner');

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
        $partners = Partner::findOrFail($id);
        $partners->delete();
        flash()->warning("تم حذف الشريك بنجاح بنجاح");
        return back();

    }
}
