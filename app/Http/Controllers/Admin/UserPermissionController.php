<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use DB;
use Spatie\Permission\Models\Permission;
use App\User;
class UserPermissionController extends Controller
{
    //
    public function index(){
      
         $users=User::all();
        return view('admin.user-permission.index',compact('users'));

     }

       public function create(){
          
           $permissions=Permission::all();
        return view('admin.user-permission.create',compact('permissions'));


   }

    public function store(Request $request){
          
  
            $requestData = $request->except('permissions');
           $requestData['password'] = bcrypt($requestData['password']);

         
         $user =  User::create($requestData);
         foreach ($request->permissions as $key => $value) {
                  # code...
                  $user->givePermissionTo($value);
                }
         


        return redirect('/user-permission')->with('success', 'User added with roles!');

   }


     public function show($id)
    {
          $users = User::findOrFail($id);
             
        return view('admin.user-permission.show', compact('users'));
    }


     public function edit($id)
    {
        $user = User::findOrFail($id);
         $permissions=Permission::all();
 $userPermissions = DB::table("model_has_permissions")->where("model_has_permissions.model_id",$id)->pluck('model_has_permissions.permission_id','model_has_permissions.permission_id')->all();      

              return view('admin.user-permission.edit', compact('user','permissions','userPermissions'));
    }

     public function update(Request $request)
    {

       $requestData = $request->except('permissions');
      $requestData['password'] = bcrypt($requestData['password']);

        $user = User::findOrFail($request->id);
        $user->update($requestData);
        $permissions= $request->permissions;
                   $user->syncPermissions($permissions);
    

        return redirect('/user-permission')->with('flash_message', 'User with role updated!');
    }

     public function destroy($id)
    {
        User::destroy($id);

        return redirect('/user-permission')->with('flash_message', 'Role deleted!');
    }
}

