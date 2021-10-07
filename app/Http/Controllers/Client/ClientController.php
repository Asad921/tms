<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Role;
use App\Models\User;
use App\Models\Project;
use App\Models\Invoice;
use App\Models\Task;
use App\Models\Event;
use Illuminate\Support\Facades\Hash;



class ClientController extends Controller
{
    public function index()
    {

        $users = User::all();
        $clients = Client::all();
        $projects = Project::all();
        $invoices = Invoice::all();
        return view('client.client-dashboard',compact('users','clients','projects','invoices'));
    }
    
    public function project()
    {

        $users = User::all();
        $clients = Client::all();

        $projects= Project::with('user', 'clients')->get();
        // return $data[0]->users->name;
        return view('client.project', compact('users','clients', 'projects'));
        

    }
    public function project_detail($id)
    {
        $user = User::find($id);
        $roles = Role::find($id);
        $clients = Client::find($id);
        $project = Project::find($id);

        return view('client.project_detail',['user'=>$user, 'roles'=>$roles,'clients'=>$clients,'project'=>$project]);

        
    }
    
    function invoice()
    {
        $users = User::all();
        $clients = Client::all();
        $invoices = Invoice::all();


        return view('client.invoice',compact('users','clients','invoices'));
    }
    public function detail_invoice($id){
       
        $invoices = Invoice::find($id);
        $projects = Project::find($id);
        $cli = User::where('utype','CLI')->get();
    
         
        return view('client.details_invoice',[ 'invoices'=>$invoices,'projects'=>$projects,'clients'=>$cli]);
    }
     
    public function download_pdf($id)
    {
        $invoices = Invoice::find($id);
         $projects = Project::find($id);
         $cli = User::where('utype','CLI')->get();
         return view('client.clientpdf',compact('invoices','projects','cli'));
          view()->share('client.clientpdf',$invoices);
         $pdf =PDF::loadView('admin.pdf',compact('invoices','projects','cli'))->setOptions(['defaultFont' => 'sans-serif']);
         return $pdf->download('invoice.pdf');
    }


    public function edit_profile($id){

        $profile = User::find($id);

       return view('client.cp_edit', compact('profile'));
   }

   public function cp_update(Request $request ,$id )
   {
       $profile = User::find($id);

       $profile->name=$request->name;
       $profile->email=$request->email;
       $profile->password=Hash::make($request->password);
       $profile->update();
       return redirect()->route('client.dashboard');
   }


   public function calendar(Request $request)
{

    if($request->ajax()) {
   
         $data = Event::whereDate('start', '>=', $request->start)
                   ->whereDate('end',   '<=', $request->end)
                   ->get(['id', 'title', 'start', 'end']);

         return response()->json($data);
    }
    return view('client.calendar');
}
public function client_ajax(Request $request)
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
