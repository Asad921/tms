<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Role;
use App\Models\User;
use App\Models\Project;
use App\Models\Task;


class ProjectController extends Controller
{
    function project()
    {   
        $users = User::where('utype','USR')->get();
        $clients = User::where('utype','CLI')->get();

        $projects= Project::with('user', 'clients','task')->get();
        // return $data[0]->users->name;
        return view('admin.project', compact('users','clients', 'projects'));
        
        
    }
    public function project_details($id)
    {
        $user = User::find($id);
        $roles = Role::find($id);
        $clients = Client::find($id);
        $project = Project::find($id);
        $task = Task::find($id);

        return view('admin.project_details',['user'=>$user, 'roles'=>$roles,'clients'=>$clients,'project'=>$project,'task'=>$task]);

        
    }
    public function project_store(Request $request){

        $projects = new Project;
        $projects->name=$request->name;
        $projects->clients_name=$request->clients_name;
        $projects->save();

        $projects->userProjects()->attach($request->users_name);
    

        return redirect()->route('admin.project');



    }
    
    function EditProj($id)
    {
        $users = User::where('utype','USR')->get();
        $clients = User::where('utype','CLI')->get();

        $projects = Project::find($id);
        return view('admin.project_edit', compact('users', 'clients','projects'));

    }
    
    public function project_update(Request $request,$id)
    {
         $users = User::where('utype','USR')->get();
         $clients = User::where('utype','CLI')->get();
        $projects = Project::find($id);

        $projects->name=$request->name;
        $projects->clients_name=$request->clients_name;
        // $projects->users_name=implode(',', $request->users_name);
        // $projects->users_name=$request->users_name;

        $projects->update();

        $projects->userProjects()->sync($request->users_name);

        return redirect()->route('admin.project');
    }
    function delete_project($id){
        
        
        $data = Project::find($id);
         $data->delete();

        
         return redirect()->route('admin.project');

    }
    

}
