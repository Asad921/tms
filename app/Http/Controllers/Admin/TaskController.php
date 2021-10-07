<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\User;
use App\Models\Project;
use App\Models\Comment;



class TaskController extends Controller
{
    public function task()
    {
        
        // $task = Task::find(32);
        // $taskImages = json_decode($task->image);
        // return $taskImages[0];
        $users = User::where('utype','USR')->get();
        $projects = Project::all();
        $tasks = Task::with('users', 'project')->where('status', 0)->get();
        $comments = Comment::all();
        return view('admin.task',compact('tasks','users', 'projects','comments'));


    }
    public function status_update($id){
        $tasks = Task::find($id);
               
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

        // return redirect()->route('admin.task');

    }
    public function tc_status_update($id){
        $tasks = Task::find($id);
               
        $tasks->status = !$tasks->status;
        $tasks->update();
       

         return redirect()->route('admin.task_completed');

    }
    public function tc(){
        $users = User::where('utype','USR')->get();
        $projects = Project::all();
        $tasks = Task::with('users', 'project')->where('status',1)->paginate();
        return view('admin.task_complete',compact('tasks','users', 'projects'));
    }
    public function task_store(Request $request){
         
        
        $tasks = new Task;
        $tasks->title=$request->title;
        $tasks->projects=$request->projects;
        $tasks->priority=$request->priority;
        $tasks->due_date=$request->due_date;
        $tasks->assignee=$request->assignee;
        $tasks->task_assigner=Auth::id();

        $tasks->tags=$request->tags;
        $tasks->description=$request->description;
        
        if($request->hasfile('image')){
            foreach($request->file('image') as $file)
            {
                //    $file= $request->file('image');
                $extention = $file->getClientOriginalExtension();
                $name = $file->getClientOriginalName();
                $name = pathinfo($name, PATHINFO_FILENAME);
                $filename = $name.time().'.'.$extention;
                $file->move('upload/resources/views',$filename);
                $imgdata[]=''.$filename;
            }

            
            $tasks->image=json_encode($imgdata);
        }
      
        $tasks->save();
    
        return redirect()->route('admin.task');
    }
    
    public function task_details($id)
    {
        $tasks = Task::find($id);
        $projects = Project::find($id);
    
         
        return view('admin.task_details',['task'=>$tasks, 'projects'=>$projects]);

        
    }
    public function task_edit($id){
        
        $tasks= Task::find($id);
        $users = User::where('utype','USR')->get();
        $projects = Project::all();

        return view('admin.task_edit', compact('tasks', 'users','projects'));

    }
    public function task_update(Request $request,$id)
    {
        $tasks = Task::find($id);

        $tasks->title=$request->title;
        $tasks->projects=$request->projects;
        $tasks->priority=$request->priority;
        $tasks->due_date=$request->due_date;
        $tasks->assignee=$request->assignee;
        $tasks->task_assigner=Auth::id();

        $tasks->tags=$request->tags;
        $tasks->Description=$request->Description;
        if($request->hasfile('image')){
            foreach($request->file('image') as $file)
            {
                
                $extention = $file->getClientOriginalExtension();
                $name = $file->getClientOriginalName();
                $name = pathinfo($name, PATHINFO_FILENAME);
                $filename = $name.time().'.'.$extention;
                $file->move('upload/resources/views',$filename);
                $imgdata[]= ''.$filename;
            }

            
            $tasks->image=json_encode($imgdata);
        }
      

        
      
        $tasks->update();
    
        return redirect()->route('admin.task');        
    }

    function delete_task($id){
        
        
        $data = Task::find($id);
         $data->delete();

        
         return redirect()->route('admin.task');

    }


    // Comment ADD in to task

    public function store_comment(Request $request)
    {
        $comments = new Comment();

        $comments->users_id = Auth::id();
        $comments->tasks_id=$request->tasks_id;
        $comments->message=$request->message;

        $comments->save();


        return redirect()->route('admin.task');

    }
    public function delete_comment($id){
        
        
        $comments= Comment::find($id);
         $comments->delete();

        
         return redirect()->route('admin.task');

    }
    public function comment_update($id){

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


    public function project_user($id){
        $project = Project::find($id);
               
        $projectuser = $project->userProjects;
       
        return response()->json([
               'projectuser' => $projectuser
            ], 200);

        // return redirect()->route('admin.task');

    }

}
