<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Role;
use App\Models\User;
use App\Models\Project;
use App\Models\Task;
use App\Models\Invoice;

use Laravel\Fortify\Fortify;
use Laravel\Fortify\Http\Requests\LoginRequest;

use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{
    public function index()
    {
         $tasks = Task::all();
        $projects = Project::all();
        $users = User::where('utype','USR')->get();
        $invoices = Invoice::all();
        return view('admin.admin-dashboard',['tasks'=>$tasks,'projects'=>$projects,'users'=>$users,'invoices'=>$invoices]);
    }
    
    
    
    
    
    function details()
    {
        return view('admin.projectdetails');
    }

    public function calendar(){

        return view('admin.calendar');
    }

    public function edit_profile($id){

         $profile = User::find($id);

        return view('admin.profile_edit', compact('profile'));
    }

    public function profile_update(Request $request ,$id )
    {
        $profile = User::find($id);

        $profile->name=$request->name;
        $profile->email=$request->email;
        $profile->password=Hash::make($request->password);
        
        if ($profile->update()) {
            return back();
        }
    }
}