<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use DB;
use Spatie\Permission\Models\Permission;
use App\User;

class UserController extends Controller
{
    //
    public function index(){
      
         $users=User::all();
        return view('admin.user.index',compact('users'));

     }
      public function create(){
          
           $roles=Role::all();
        return view('admin.user.create',compact('roles'));
    }

      public function store(Request $request){
          
  
            $requestData = $request->except('roles');
            $requestData['password'] = bcrypt($requestData['password']);

         
         $user =  User::create($requestData);
         foreach ($request->roles as $key => $value) {
                  # code...
                  $user->assignRole($value);
                }
         


        return redirect('/user')->with('success', 'User added with roles!');

   }

    public function show($id)
    {
          $users = User::findOrFail($id);
             
        return view('admin.user.show', compact('users'));
    }

     public function edit($id)
    {
        $user = User::findOrFail($id);
         $roles=Role::all();
         $userroles = $user->roles->pluck('name','name')->all();;
        return view('admin.user.edit', compact('user','roles','userroles'));
    }

     public function update(Request $request)
    {

       $requestData = $request->except('roles');
      $requestData['password'] = Hash::make($requestData['password']);

        $user = User::findOrFail($request->id);
        $user->update($requestData);
        $roles=$request->roles;
         
          $user->syncRoles($roles);
                

        return redirect('/user')->with('flash_message', 'User with role updated!');
    }

     public function destroy($id)
    {
        User::destroy($id);

        return redirect('/user')->with('flash_message', 'Role deleted!');
    }


}
