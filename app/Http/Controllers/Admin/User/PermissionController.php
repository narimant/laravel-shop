<?php

namespace App\Http\Controllers\Admin\user;

use App\Http\Controllers\Controller;
use App\Models\User\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{

    public function __construct()
    {

        $this->middleware('role:,permission_user_index')->only('index');
        $this->middleware('role:,permission_user_create')->only('create');
        $this->middleware('role:,permission_user_store')->only('store');
        $this->middleware('role:,permission_user_edit')->only('edit');
        $this->middleware('role:,permission_user_update')->only('update');
        $this->middleware('role:,permission_user_destroy')->only('destroy');

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permissions = Permission::all();
        return view('admin.user.permission.index', compact('permissions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.permission.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputs = $request->all();
        $permission = Permission::create($inputs);
        return redirect()->route('admin.user.permission.index')->with('swal-success', 'دسترسی جدید با موفقیت ثبت شد');
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
    public function edit(Permission $permission)
    {
        return view('admin.user.permission.edit', compact('permission'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Permission $permission)
    {
        $inputs = $request->all();
        $permission->update($inputs);
        return redirect()->route('admin.user.permission.index')->with('swal-success', 'دسترسی شما با موفقیت ویرایش شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permission $permission)
    {
        $result = $permission->delete();
        return redirect()->route('admin.user.permission.index')->with('swal-success', 'دسترسی شما با موفقیت حذف شد');
    }
}
