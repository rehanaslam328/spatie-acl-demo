<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use DB;
class RoleController extends Controller
{
    //

    public function index(){

         $roles=Role::all();
        return view('admin.role.index',compact('roles','disableuser'));

     }
      public function create(){
          
        return view('admin.role.create');


   }


   public function store(Request $request){
          
  
       $requestData = $request->all();
             $role= Role::create($requestData);

                // foreach ($request->permissions as $key => $value) {
                //   # code...
                //    $role->givePermissionTo($value);
                // }


        return redirect('/role')->with('success', 'Role added !');

   }

   public function show($id)
    {
          $roles = Role::findOrFail($id);
             
        return view('admin.role.show', compact('roles'));
    }

     public function edit($id)
    {
        $role = Role::findOrFail($id);
       //  $permissions=Permission::all();
       // $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id",$id)
       //      ->pluck('role_has_permissions.permission_id','role_has_permissions.permission_id')
       //      ->all();
        return view('admin.role.edit', compact('role'));
    }

       public function update(Request $request)
    {
        $role = Role::findOrFail($request->id);

       $requestData = $request->all();
        
        $role->update($requestData);

          // foreach ($request->permissions as $key => $value) {
          //         # code...
          //        $role->syncPermissions($value);
          //       }
        

        return redirect('/role')->with('flash_message', 'Role updated!');
    }

     public function destroy($id)
    {
        Role::destroy($id);

        return redirect('/role')->with('flash_message', 'Role deleted!');
    }
}
