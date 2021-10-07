<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'projects',
        'asignee',
        'due_date',
        'description'

    ];

    public function users(){
        return $this->belongsTo(User::class, 'assignee', 'id');
    }
 
    public function project()
    {
        return $this->belongsTo(Project::class, 'projects', 'id');
    }
    public function userProjects()
    {
        return $this->belongsToMany(Project::class, 'users_projects', 'projects_id', 'users_id');
    }
    public function comments(){
        
        return $this->hasMany(Comment::class, 'tasks_id', 'id');

    }
    public function task_assigner(){

        return $this->belongsTo(User::class,'task_assigner','id');
    }
    public function task_assignee(){

        return $this->belongsTo(User::class,'task_assigner','id');
    }
}

