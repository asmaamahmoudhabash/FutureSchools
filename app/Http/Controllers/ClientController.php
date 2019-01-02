<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $clients = Client::latest()->paginate(10);

        return view('admin.clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Client $model)
    {
        //
        return view('admin.clients.create', compact('model'));
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
        //  $client = Client::create($request->all());
        $client = Auth::user()->clients()->create($request->except('image'));
        $client->slug = $client->title;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time().''.rand(1111, 99999).'.'.$image->getClientOriginalExtension();
            $img = Image::make($request->file('image'));
            $img->save('uploads/clients/'.$name);
            $client->image = 'uploads/clients/'.$name;
            $client->save();
        }

        flash()->success('تم اضافه عميل بنجاح');

        return redirect('admin/client');
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
        $model = Client::findOrFail($id);

        return view('admin.clients.edit', compact('model'));
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
//            'image' => 'required'

        ]);

        $client = Client::findOrFail($id);
        // $client->update($request->all());
        $client->update($request->except('image'));
        $client->slug = $client->title;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time().''.rand(1111, 99999).'.'.$image->getClientOriginalExtension();
            $img = Image::make($request->file('image'));
            $img->save('uploads/clients/'.$name);
            $client->image = 'uploads/clients/'.$name;
            $client->save();
        }

        flash()->success('تم تعديل العميل بنجاح ');

        return redirect('admin/client');
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
        $clients = Client::findOrFail($id);
        $clients->delete();
        flash()->warning('تم حذف العميل بنجاح بنجاح');

        return back();
    }
}
