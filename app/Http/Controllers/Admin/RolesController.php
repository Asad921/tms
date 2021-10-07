<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Role;
use App\Models\User;
use App\Models\Project;


class RolesController extends Controller
{
    public function role()
    {
        $data= Role::all();

        return view('admin.role',['roles'=>$data]);
        
    }
    public function roles_details($id)
    {
        // $user = User::find($id);
        // $clients = Client::find($id);
        // $project = Project::find($id);
        $role = Role::find($id);
        
        return view('admin.roles_details',[ 'role'=>$role]);

        
    }
    
    public function role_store(Request $request){

        //dd(count($request->permission));
        $roles = new Role;
        $roles->name=$request->name;
        $roles->permission=$request->permission;
        $roles->total_permission=count($request->permission);
        $roles->permission= implode(',',$request->permission);
        $roles->description=$request->description;
        
        
        $roles->save();
    
        return redirect()->route('admin.role');
    }
    public function roles_edit($id){

        $data = Role::find($id);

    // dd($data);
         
        return view('admin.roles_edit', compact('data' ));


    }
    public function update_roles(Request $request,$id){
        
        $data = Role::find($id);
    
        $data->name=$request->name;
        $data->permission=$request->permission;
        $data->total_permission=count($request->permission);
        $data->permission= implode(',',$request->permission);
        $data->description=$request->description;
        
        $data->update();
    
        return redirect()->route('admin.role');
    }
    function delete_role($id){
        
        
        $data = Role::find($id);
         $data->delete();

        
         return redirect()->route('admin.role');

    }

    
}
