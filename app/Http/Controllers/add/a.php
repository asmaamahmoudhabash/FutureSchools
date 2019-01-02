<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

use App\Http\Requests;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $model = Setting::findOrNew(1);

        return view('admin.settings.edit',compact('model'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //'Commitments','goals'
//        return "hatem";
        $this->validate($request, [
            'facebook' => 'required',
            'twitter' => 'required',
            'youtube' => 'required',
            'instgram' => 'required',
            'email' => 'required',
            'fax' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'welcome_title' => 'required',
            'welcome_content' => 'required',
            'video' => 'required',
            'website_name' => 'required',
            //'website_description'=>'required',
            'website_msg' => 'required',
            'keywords' => 'required',
            'Commitments' => 'required',
            'goals' => 'required',



        ]);


        $settings = Setting::findOrFail($id);
        $settings->update($request->all());
        flash()->success('تم تعديل الاعدادات بنجاح ');
        return redirect('admin/setting');
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
    }
}