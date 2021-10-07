<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'utype',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function proj()
    {
        return $this->belongsTo(Project::class, 'projects', 'id');
    }
    
    public function role()
    {
        return $this->belongsTo(Role::class, 'roles', 'id');
    }

    public function task(){
        
        return $this->hasMany(Task::class, 'assignee', 'id');

    }
    public function pro(){
        
        return $this->hasMany(Project::class, 'users_name', 'id');

    }
    public function clientProject(){
        
        return $this->hasMany(Project::class, 'clients_name', 'id');
    }

    public function userInvoice(){
        return $this->hasMany(Invoice::class, 'clients', 'id');
    }

    public function userProjects()
    {
        return $this->belongsToMany(Project::class, 'users_projects', 'users_id', 'projects_id');
    }
}
