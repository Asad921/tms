<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    public function comments()
    {
        return $this->belongsTo(Task::class, 'tasks_id', 'id');  
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');  
    }

}
