<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\Permission;
use Session;
use Illuminate\Support\Facades\Input;

class RoleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('view',new Role());
        $roles = Role::all();
        return view('admin.super.roles.index')->withRoles($roles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create',Role::class);
        $permissions = Permission::all();
        return view('admin.super.roles.create')->withPermissions($permissions);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request,[
                'display_name' => 'required|max:255',
                'name' => 'required|max:255|alphadash|unique:permissions,name',
                'description'=> 'sometimes|max:255'
                ]);
         $this->authorize('create',Role::class);
         //$permissions = Input::get('permission');
         $permissions = $request->permission;
         $permission_select = $request->permission_select;
        
         

       
          print_r($permission_select);
         foreach ($permissions as $permission) {
            print_r($permission);
         }
         
         return ;
         // serialize(Input::get('permission'));

         $role= new Role();
         $role->role = $request->name;
         $role->display_name=$request->display_name;
         $role->description=$request->description;
         $role->save();

         Session::flash('success','Role has been successfully saved');
         return redirect()->route('roles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $role = Role::findOrFail($id);
        $this->authorize('view',$role);
        $permissions = Permission::all();
        return view('admin.super.roles.show')->withRole($role)->withPermissions($permissions);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role = Role::findOrFail($id);
        $this->authorize('update',$role);
        return view('admin.super.roles.edit')->withRole($role);
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
                'name' => 'required|max:255|alphadash|unique:permissions,name',
                'description'=> 'sometimes|max:255'
                ]);
          $this->authorize('update',$role);

         $role= Role::findOrFail($id);
         $role->role = $request->name;
         $role->display_name=$request->display_name;
         $role->description=$request->description;
         $role->save();

         Session::flash('success','Role has been successfully saved');
         return redirect()->route('roles.show',$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('delete',$role);
    }
}
