<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Permission;
use Session;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permissions = Permission::all();
        return view('admin.super.permissions.index')->withPermissions($permissions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.super.permissions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // if($request->permission_type == 'basic'){
            $this->validate($request,[
                'display_name' => 'required|max:255',
                'name' => 'required|max:255|alphadash|unique:permissions,name',
                'description'=> 'sometimes|max:255'
                ]);

            $permission = new Permission();
            $permission->name = $request->name;
            $permission->display_name = $request->display_name;
            $permission->description = $request->description;
            $permission->save();

            Session::flash('success','Permission has been succeddfully added');
            return redirect()->route('permissions.index');
        // }
        // elseif($request->permission_type == 'crud'){
        //     $this->validate($request,[
        //         'resource' => 'required|min:3|max:100|alpha'
        //         ]);

        //     $crud = explod(',',$request->crud_selected);


        // }
        // else{
        //     Session::flash('error','Input Invalid');
        //     return redirect()->back();
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $permission = Permission::findOrFail($id);
        return view('admin.super.permissions.show')->withPermission($permission);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $permission = Permission::findOrFail($id);
    return view('admin.super.permissions.edit')->withPermission($permission);
    
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
        $this->validate($request,[
                'display_name' => 'required|max:255',
                'description'=> 'sometimes|max:255'
                ]);

            $permission = Permission::findOrFail($id);
            $permission->display_name = $request->display_name;
            $permission->description = $request->description;
            $permission->save();

            Session::flash('success','Permission has been succeddfully updated');
            return redirect()->route('permissions.show',$id);
        
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
