<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Role;
use App\Models\User;
use App\Models\Project;
use Illuminate\Support\Facades\Hash;


class ClientsController extends Controller
{
    public function client()
    {
        $data= User::where('utype', 'CLI')->get();
        return view('admin.client',['users'=>$data]);

    }
    public function client_details($id)
    {
        $client = User::find($id);

    
         
        return view('admin.client_details',['client'=>$client]);

        
    }
    public function store(Request $request){

        
        $clients = new User;
        $clients->name=$request->name;
        $clients->department=$request->department;
        $clients->email=$request->email;
        $clients->password=Hash::make($request->password);
        $clients->website=$request->website;
        $clients->utype= $request->utype;
        if($request->hasfile('image')){
            $file= $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $name = $file->getClientOriginalName();
            $name = pathinfo($name, PATHINFO_FILENAME);
            $filename = $name.time().'.'.$extention;
            $file->move('upload/resources/views',$filename);
            $clients->image = $filename;

        }
        $clients->save();
    
        return redirect()->route('admin.client');
    }
    
    function edit_client($id){
        
        
         $data = User::find($id);

        // $department
         
        return view('admin.client_edit', compact('data' ));

    }
    public function update_client(Request $request,$id){

        $data = User::find($id);
    
        $data->name=$request->name;
        $data->department=$request->department;
        $data->email=$request->email;
        $data->password=Hash::make($request->password);
        $data->website=$request->website;
        if($request->hasfile('image')){
            $file= $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $name = $file->getClientOriginalName();
            $name = pathinfo($name, PATHINFO_FILENAME);
            $filename = $name.time().'.'.$extention;
            $file->move('upload/resources/views',$filename);
            $data->image = $filename;

        }
        $data->update();
    
        return redirect()->route('admin.client');
    }
    function delete_client($id){
        
        
        $data = User::find($id);
         $data->delete();

        
         return redirect()->route('admin.client');

    }

}
