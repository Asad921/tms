<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'clients',
        
    ];

    public function cli(){
        return $this->belongsTo(User::class, 'clients', 'id');
    }
 
    public function projects()
    {
        return $this->belongsTo(Project::class, 'project', 'id');
    }
}
