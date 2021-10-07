<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Project;
use App\Models\Invoice;
use PDF;

class InvoiceController extends Controller
{
    public function invoice()
    {   
        $projects = Project::all();
        $users = User::all();
        $invoices = Invoice::all();
        
        return view('admin.invoice',['projects'=>$projects,'users'=>$users,'invoices'=>$invoices]);
    }
    public function test($id){
        return($id);
    }
    public function invoice_detail($id){
       
        $invoices = Invoice::find($id);
        $projects = Project::find($id);
        $cli = User::where('utype','CLI')->get();
    
         
        return view('admin.invoice_details',[ 'invoices'=>$invoices,'projects'=>$projects,'clients'=>$cli]);
    }

    public function invoice_store(Request $request){

        
        $invoice = new Invoice;
        $invoice->name=$request->name;
        $invoice->clients=$request->clients;
        $invoice->invoice_no='SJ_TMS-'.rand(001,999);
        $invoice->project=$request->project;
        $invoice->issue_date=$request->issue_date;
        $invoice->due_date= $request->due_date;
        $invoice->tax= $request->tax;
        $invoice->total_bill= $request->total_bill;
        $invoice->status= $request->status;
        $invoice->notes= $request->notes;
        
        $invoice->save();
    
        return redirect()->route('admin.invoice_index');
    }
    function EditInvoice($id)
    {
        $clients = User::where('utype','CLI')->get();

        $projects = Project::all();
        $invoices = Invoice::find($id);
        return view('admin.invoice_edit', compact( 'clients','projects','invoices'));

    }
    public function invoice_update(Request $request,$id)
    {
        // dd($request);

         $clients = User::where('utype','CLI')->get();
        $projects = Project::find($id);
        $invoices = Invoice::find($id);

        $invoices->name=$request->name;
        $invoices->clients=$request->clients;
        $invoices->project=$request->project;
        $invoices->issue_date=$request->issue_date;
        $invoices->due_date=$request->due_date;
        $invoices->total_bill=$request->total_bill;
        $invoices->status=$request->status;
        $invoices->notes=$request->notes;


        $invoices->update();


        return redirect()->route('admin.invoice_index');
    }

 public function delete_invoices($id)
    {
       
        
        $data = Invoice::find($id);
         
        $data->delete();

        
         return back();

    }


    
    public function download_pdf($id)
    {
        $invoices = Invoice::find($id);
         $projects = Project::find($id);
         $cli = User::where('utype','CLI')->get();
         return view('admin.pdf',compact('invoices','projects','cli'));
          view()->share('admin.invoice_details',$invoices);
         $pdf =PDF::loadView('admin.pdf',compact('invoices','projects','cli'))->setOptions(['defaultFont' => 'sans-serif']);
         return $pdf->download('invoice.pdf');
    }

   
   
}
