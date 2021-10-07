<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'clients_name',
        'users_name',
        
    ];

    public function user(){
        return $this->belongsTo(User::class, 'users_name', 'id');
    }
 
    public function clients()
    {
        return $this->belongsTo(User::class, 'clients_name', 'id');
    }

    public function task(){
        
        return $this->hasMany(Task::class, 'projects', 'id');

    }

    public function userProjects()
    {
        return $this->belongsToMany(User::class, 'users_projects', 'projects_id', 'users_id');
    }
}
