<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Task;
use App\Models\User;
use App\Models\Project;
use App\Models\Role;
use App\Models\Client;
use App\Models\Comment;
use App\Models\Event;


use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    function index()
    {
        $tasks = Task::all();
        $projects = Project::all();
        $users = User::all();
        return view('user.user-dashboard',['tasks'=>$tasks,'projects'=>$projects,'users'=>$users]);
    }
    

    // function client()
    // {
    //     return view('user.client');
    // }
    function task()
    {
        return view('user.task');
    }
    
    // function role()
    // {
    //     return view('user.role');
    // }
    public function role()
    {
        $data= Role::all();

        return view('user.role',['roles'=>$data]);
        
    }
    
    function project()
    {
        return view('user.project');
    }
    

    public function task_details($id)
    {
        $tasks = Task::find($id);
        $projects = Project::find($id);
    
         
        return view('user.task_details',['task'=>$tasks, 'projects'=>$projects]);

        
    }
    public function user_status_update($id){
        $tasks = Task::find($id);
               
        // $tasks->status = !$tasks->status;

        // $tasks->update();

        // return redirect()->route('user.task');

        $tasks->status = !$tasks->status;

        if($tasks->update())
            return response()->json([
                'status'=>true,
                'message'=>'status updated',
            ], 200);

        else
            return response()->json([
                'status'=>false,
                'message'=>'something went wrong please try again!',
            ], 400);

    }
    public function clients()
    {
        $data= User::where('utype', 'CLI')->get();
        return view('user.client',['users'=>$data]);

    }
    public function client_details($id){
    
    
        $client = User::find($id);

    
         
        return view('user.client_details',['client'=>$client]);

        
    
    }

    public function project_details($id)
    {
        $user = User::find($id);
        $roles = Role::find($id);
        $clients = Client::find($id);
        $project = Project::find($id);

        return view('user.project_details',['user'=>$user, 'roles'=>$roles,'clients'=>$clients,'project'=>$project]);

        
    }
    public function role_details($id){
        $role = Role::find($id);
        
        return view('user.role_details',[ 'role'=>$role]);
    }

    public function edit_profile($id){

        $profile = User::find($id);

       return view('user.up_edit', compact('profile'));
   }

   public function up_update(Request $request ,$id )
   {
       $profile = User::find($id);

       $profile->name=$request->name;
       $profile->email=$request->email;
       $profile->password=Hash::make($request->password);
       
       $profile->update();

       return redirect()->route('user.dashboard');
   }

   //for comment task
    
   public function add_comment(Request $request){
    $comments = new Comment();

    $comments->users_id = Auth::id();
    $comments->tasks_id=$request->tasks_id;
    $comments->message=$request->message;

    $comments->save();


    return redirect()->route('user.task');
   }
   public function comment_delete($id){
        
        
    $comments= Comment::find($id);
     $comments->delete();

    
     return redirect()->route('user.task');

}
public function uc_update($id){

    $comments = Comment::where([
        ['tasks_id', $id],
        ['is_read', 0],
       ])->get();
   foreach ($comments as $key => $comment) {
       $comment->is_read = !$comment->is_read;
       $comment->update();
   }

   if($comments)
       return response()->json([
           'status'=>true,
           'message'=>'status updated',
       ], 200);

   else
       return response()->json([
           'status'=>false,
           'message'=>'something went wrong please try again!',
       ], 400);

}
public function calendar(Request $request)
{

    if($request->ajax()) {
   
         $data = Event::whereDate('start', '>=', $request->start)
                   ->whereDate('end',   '<=', $request->end)
                   ->get(['id', 'title', 'start', 'end']);

         return response()->json($data);
    }
    return view('user.calendar');
}
public function user_ajax(Request $request)
{

    switch ($request->type) {
       case 'add':
          $event = Event::create([
              'title' => $request->title,
              'start' => $request->start,
              'end' => $request->end,
          ]);

          return response()->json($event);
         break;

       case 'update':
          $event = Event::find($request->id)->update([
              'title' => $request->title,
              'start' => $request->start,
              'end' => $request->end,
          ]);

          return response()->json($event);
         break;

       case 'delete':
          $event = Event::find($request->id)->delete();

          return response()->json($event);
         break;
         
       default:
         # code...
         break;
    }
}

}
