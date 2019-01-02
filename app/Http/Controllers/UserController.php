<?php

namespace App\Http\Controllers;
//
use App\User;
use Illuminate\Http\Request;
//
use App\Http\Requests;
use Illuminate\Support\Facades\Hash;



class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::latest()->paginate(10);
        return view('admin.users.index', compact('users'));



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(User $model)
    {
      
        return view('admin.users.create', compact('model'));
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
            'password' => 'required|confirmed',
            'email' => 'required|email|unique:users,email',
        ]);

        $request->merge(['password' => Hash::make($request->password)]);


        User::create($request->all());
        // return $request;
        flash()->success('تم اضافه مستخدم بنجاح');
        return redirect('admin/user');
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
        $model = User::findOrFail($id);
        return view('admin.users.edit', compact('model'));
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
            'password' => 'confirmed',
            'email' => 'required|email|unique:users,email,' . $id,
        ]);

        $request->merge(['password' => Hash::make($request->password)]);
        $user = User::findOrFail($id);
        $user->update($request->all());
        flash()->success('تم تعديل المستخدم بنجاح ');
        return redirect('admin/user');
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
        $user = User::findOrFail($id);
        $user->delete();
        flash()->warning("تم حذف المستخدم بنجاح");
        return back();

    }
}
