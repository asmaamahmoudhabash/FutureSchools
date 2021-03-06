<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use Hash;
use Illuminate\Http\Request;
use Response;

class UserController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function changePassword()
    {
        return view('admin.reset-password');
    }

    public function changePasswordSave(Request $request)
    {
        $this->validate($request, [
            'old-password' => 'required',
            'password'     => 'required|confirmed',
        ]);

        $user = Auth::user();

        if (Hash::check($request->input('old-password'), $user->password)) {
            // The passwords match...
            $user->password = $request->input('password');
            $user->save();
            flash()->success('تم تحديث كلمة المرور');

            return view('admin.reset-password');
        } else {
            flash()->error('كلمة المرور غير صحيحة');

            return view('admin.reset-password');
        }
    }

    public function index()
    {
        $users = User::paginate(20);

        return view('admin.users.index', compact('users'));
    }

    public function create(User $model)
    {
        return view('admin.users.create', compact('model'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name'        => 'required',
            'password'    => 'required|confirmed',
            'email'       => 'required|email|unique:users,email',
            'roles_list'  => 'required',
        ]);

        $user = User::create($request->except('roles_list', 'permissions_list'));
        $user->attachRole($request->input('roles_list'));

        flash()->success('تم إضافة المستخدم بنجاح');

        return redirect('admin/user/create');
    }

    public function show($id)
    {
        $user = User::with('addresses')->findOrFail($id);
        $orders = $user->orders()->latest()->paginate(5);

        return view('admin.sushi.user', compact('user', 'orders'));
    }

    public function edit($id)
    {
        $model = User::findOrFail($id);

        return view('admin.users.edit', compact('model'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name'        => 'required',
            'password'    => 'confirmed',
            'email'       => 'required|email|unique:users,email,'.$id,
            'roles_list'  => 'required',
        ]);

        $user = User::findOrFail($id);
        $user->syncRoles((array) $request->input('roles_list'));
        $user = $user->update($request->all());

        flash()->success('تم تعديل بيانات المستخدم بنجاح.');

        return redirect('admin/user/'.$id.'/edit');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);

        $user->delete();

        return Response::json($id, 200);
    }
}
