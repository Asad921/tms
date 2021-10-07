<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\TaskController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\InvoiceController;
use App\Http\Controllers\Admin\ClientsController;
use App\Http\Controllers\Admin\FullCalenderController;
use App\Http\Controllers\User\UserController as UsersController;
use App\Http\Controllers\Client\ClientController;
use App\Http\Controllers\Client\CTaskController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Route::get('/', function () {
//     return view('auth/login');
// });
// Route::post('/', function () {
//     return view('auth/login');
// });

// Route::get('/register', function () {
//     return view('auth/register');
// })->name('register');

Route::get('/', function () {
     return view('auth/login');
 });

 
 Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
     return view('dashboard');
 })->name('dashboard');

// For User & client

Route::middleware(['auth:sanctum','verified'])->group(function(){
    Route::get('/user/user-dashboard',[UsersController::class,'index'])->name('user.dashboard');
    Route::get('user/client',[UsersController::class,'client'])->name('user.client');
    Route::get('user/task',[UsersController::class,'task'])->name('user.task');
    Route::get('user/role',[UsersController::class,'role'])->name('user.role');
    Route::get('user/project',[UsersController::class,'project'])->name('user.project');
    // Route::get('user/calendar',[UsersController::class,'calendar'])->name('user.calendar');
    Route::get('/user/task_details/{id}',[UsersController::class,'task_details'])->name('user.task_details');
    Route::get('user/client',[UsersController::class,'clients'])->name('user.clients');
    Route::get('/user/client_details/{id}',[UsersController::class,'client_details'])->name('user.client_details');
    Route::get('/user/project_details/{id}',[UsersController::class,'project_details'])->name('user.project_details');
    Route::get('/user/role_details/{id}',[UsersController::class,'role_details'])->name('user.roles_details');
    Route::get('/user_status_update/{id}',[UsersController::class,'user_status_update'])->name('user.user_status_update');
    Route::get("/user/up_edit/{id}",[UsersController::class,'edit_profile'])->name('user.up_edit');
    Route::post("up_update/{id}",[UsersController::class,'up_update'])->name('user.up_update');
    Route::post('/add_comment',[UsersController::class,'add_comment'])->name('user.comment');
    Route::get("comment_delete/{id}",[UsersController::class,'comment_delete'])->name('user.delete_comment');
    Route::get('/uc_update/{id}',[UsersController::class,'uc_update'])->name('user.uc_update');
    Route::get('user/calendar',[UsersController::class,'calendar'])->name('user.calendar');
    Route::post('user_fullcalenderAjax',[UsersController::class,'user_ajax']);

  
    // Client Controller
    Route::get('client/client-dashboard',[ClientController::class,'index'])->name('client.dashboard');
    Route::get('client/project',[ClientController::class,'project'])->name('client.project');
    Route::get('client/invoice',[ClientController::class,'invoice'])->name('client.invoice');
    Route::get('client/calendar',[ClientController::class,'calendar'])->name('client.calendar');
    Route::get('/client/project_detail/{id}',[ClientController::class,'project_detail'])->name('client.project_detail');
    Route::get("/client/clientpdf/{id}",[ClientController::class,'download_pdf'])->name('client.pdf_download');
    Route::get("client/details_invoice/{id}",[ClientController::class,'detail_invoice'])->name('client.detail_invoice');
    Route::get("/client/cp_edit/{id}",[ClientController::class,'edit_profile'])->name('client.profile_edit');
    Route::post("cp_update/{id}",[ClientController::class,'cp_update'])->name('client.cp_update');
    Route::get('client/calendar',[ClientController::class,'calendar'])->name('client.calendar');
    Route::post('client_fullcalenderAjax',[ClientController::class,'client_ajax']);

    
    //client task 
    Route::get('client/task',[CTaskController::class,'task'])->name('client.task');
    // Route::get('client/task_complete',[CTaskController::class,'tc'])->name('client.task_completed');
    // // Route::get('/client_status_update/{id}',[CTaskController::class,'client_status_update'])->name('client.status_update');
    Route::post('/task_add',[CTaskController::class,'task_add'])->name('client.add_task');
    Route::get('/tc_status_update/{id}',[CTaskController::class,'tc_status_update'])->name('client.tc_status_update');
    Route::get('/client/task_details/{id}',[CTaskController::class,'task_details'])->name('client.task_details');
    Route::get('/client/task_edit/{id}',[CTaskController::class,'task_edit'])->name('client.task_edit');
    Route::post('/client_task_update/{id}',[CTaskController::class,'client_task_update'])->name('client.update_task');
    Route::get("/client_task_delete/{id}",[CTaskController::class,'client_task_delete'])->name('client.delete_task');
    Route::post('/client_comment',[CTaskController::class,'client_comment'])->name('client.comment');
    Route::get("cc_delete/{id}",[CTaskController::class,'cc_delete'])->name('client.cc_delete');
    Route::get('/cc_update/{id}',[CTaskController::class,'cc_update'])->name('client.cc_update');
    Route::get('/project_member/{id}',[CTaskController::class,'project_member'])->name('client.project_member');
});



//For Admin
Route::middleware(['auth:sanctum','verified','authadmin'])->group(function(){
    // Admin Controller
    Route::get('admin/admin-dashboard',[AdminController::class,'index'])->name('admin.dashboard');
    Route::get('admin/projectdetails',[AdminController::class,'details'])->name('admin.projectdetails');
    
    Route::get("/admin/profile_edit/{id}",[AdminController::class,'edit_profile'])->name('admin.profile_edit');
    Route::post("profile_update/{id}",[AdminController::class,'profile_update'])->name('admin.profile_update');
    // Admin full Calendar
    Route::get('admin/calendar',[FullCalenderController::class,'index'])->name('admin.calendar');
    Route::post('fullcalenderAjax',[FullCalenderController::class,'ajax']);
    
    // admin Client Controller
    Route::get('admin/client',[ClientsController::class,'client'])->name('admin.client');
    Route::post('/store',[ClientsController::class,'store'])->name('admin.store');
    Route::get('/admin/client_details/{id}',[ClientsController::class,'client_details'])->name('admin.client_details');
    Route::get("/admin/client_edit/{id}",[ClientsController::class,'edit_client'])->name('admin.client_edit');
    Route::post("update_client/{id}",[ClientsController::class,'update_client']);
    Route::get("delete_client/{id}",[ClientsController::class,'delete_client'])->name('admin.client_delete');
    // admin Roles Controller
    Route::get('admin/role',[RolesController::class,'role'])->name('admin.role');
    Route::get('/admin/roles_details/{id}',[RolesController::class,'roles_details'])->name('admin.roles_details');
    Route::post('/role_store',[RolesController::class,'role_store'])->name('admin.role_store');
    Route::get('/admin/roles_edit/{id}',[RolesController::class,'roles_edit'])->name('admin.role_edit');
    Route::post("update_roles/{id}",[RolesController::class,'update_roles']);
    Route::get("delete_role/{id}",[RolesController::class,'delete_role'])->name('admin.role_delete');
    // admin User Controller
    Route::get('admin/user',[UserController::class,'user'])->name('admin.user');
    Route::get('/admin/user_details/{id}',[UserController::class,'user_details'])->name('admin.user_details');
    Route::post('/user_store',[UserController::class,'user_store'])->name('admin.user_store');
    Route::get('/admin/user_edit/{id}',[UserController::class,'user_edit'])->name('admin.user_edit');
    Route::post("user_update/{id}",[UserController::class,'user_update'])->name('admin.user_update');
    Route::get("delete_user/{id}",[UserController::class,'delete_user'])->name('admin.user_delete');
    //  admin Project Controller 
    Route::post('/project_store',[ProjectController::class,'project_store'])->name('admin.project_store');
    Route::get('admin/project',[ProjectController::class,'project'])->name('admin.project');
    Route::get('/admin/project_details/{id}',[ProjectController::class,'project_details'])->name('admin.project_details');
    Route::get('admin/project_edit/{id}',[ProjectController::class,'EditProj'])->name('admin.projectEdit');
    Route::post('project_update/{id}',[ProjectController::class,'project_update'])->name('admin.project_update');
    Route::get("delete_project/{id}",[ProjectController::class,'delete_project'])->name('admin.project_delete');
    // admin Task Controller
    Route::get('admin/task',[TaskController::class,'task'])->name('admin.task');
    Route::get('admin/task_complete',[TaskController::class,'tc'])->name('admin.task_completed');
    Route::get('/status_update/{id}',[TaskController::class,'status_update'])->name('admin.status_update');
    Route::post('/task_store',[TaskController::class,'task_store'])->name('admin.task_store');
    Route::get('/tc_status_update/{id}',[TaskController::class,'tc_status_update'])->name('admin.tc_status_update');
    Route::get('/admin/task_details/{id}',[TaskController::class,'task_details'])->name('admin.task_details');
    Route::get('/admin/task_edit/{id}',[TaskController::class,'task_edit'])->name('admin.task_edit');
    Route::post('task_update/{id}',[TaskController::class,'task_update'])->name('admin.task_update');
    Route::get("delete_task/{id}",[TaskController::class,'delete_task'])->name('admin.task_delete');
    Route::post('/store_comment',[TaskController::class,'store_comment'])->name('admin.task_comment');
    Route::get("delete_comment/{id}",[TaskController::class,'delete_comment'])->name('admin.comment_delete');
    Route::get('/comment_update/{id}',[TaskController::class,'comment_update'])->name('admin.comment_update');
    Route::get('/project_user/{id}',[TaskController::class,'project_user'])->name('admin.project_user');
    //admin Invoice Controller
    Route::get('admin/invoice',[InvoiceController::class,'invoice'])->name('admin.invoice_index');
    Route::post('/invoice_store',[InvoiceController::class,'invoice_store'])->name('admin.invoice_store');
    Route::get('/admin/invoice_edit/{id}',[InvoiceController::class,'EditInvoice'])->name('admin.invoice_edit');
    Route::post('invoice_update/{id}',[InvoiceController::class,'invoice_update'])->name('admin.invoice_update');
    Route::get("delete_invoices/{id}",[InvoiceController::class,'delete_invoices'])->name('admin.invoices_delete');
    Route::get("/detail_invoices/{id}",[InvoiceController::class,'invoice_detail'])->name('admin.invoices_details');
    Route::get("/download_pdf/{id}",[InvoiceController::class,'download_pdf'])->name('admin.pdf_download');
    
    
});



// Auth::routes();

