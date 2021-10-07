<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Role;
use App\Models\User;
use App\Models\Project;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function user()
    {
        $data= User::with('role','task','userProjects')->where('utype','USR')->get();
        
        $roles = Role::all();
        $projects = project::all();
        return view('admin.user',['users'=>$data, 'roles' => $roles,'projects'=>$projects]);

        
    }
    public function user_details($id)
    {
        $user = User::find($id);
        $roles = Role::find($id);

    
         
        return view('admin.user_details',['user'=>$user, 'roles'=>$roles]);

        
    }
    public function user_store(Request $request){

        $users = new User;
        $users->name=$request->name;
        $users->phone=$request->phone;
        $users->email=$request->email;
        $users->password=Hash::make($request->password);
        $users->projects=$request->projects;
        $users->roles=$request->roles;
        if($request->hasfile('image')){
            $file= $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $name = $file->getClientOriginalName();
            $name = pathinfo($name, PATHINFO_FILENAME);
            $filename = $name.time().'.'.$extention;
            $file->move('upload/resources/views',$filename);
            $users->image = $filename;

        }
        $users->save();
    
        return redirect()->route('admin.user');


    }
    public function user_edit($id){
        $user = User::find($id);
        $roles = Role::all();
        $projects = Project::all();
        return view('admin.user_edit', compact('user', 'roles','projects'));

    }
    public function user_update(Request $request,$id){
        $user = User::find($id);
    
        $user->name=$request->name;
        $user->phone=$request->phone;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->projects=$request->projects;
        $user->roles=$request->roles;
        if($request->hasfile('image')){
            $file= $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $name = $file->getClientOriginalName();
            $name = pathinfo($name, PATHINFO_FILENAME);
            $filename = $name.time().'.'.$extention;
            $file->move('upload/resources/views',$filename);
            $user->image = $filename;

        }
        $user->save();

        return redirect()->route('admin.user');

    
    }
    function delete_user($id){
        
        
        $data = User::find($id);
         $data->delete();

        
         return redirect()->route('admin.user');

    }
    
    
}
