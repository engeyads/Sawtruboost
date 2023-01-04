<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'active',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function isAdmin() {
        return $this->getRoleNames()[0] == 'Admin';
    }

    /*
    public function comments()
    {
        $this->hasMany(Comments::class);
    }
    */

    public function userProfile()
    {
        return $this->hasOne(userProfiles::class,'uid','id');
    }

    public function posts()
    {
        return $this->hasMany(BlogPost::class,'uid','id');
    }

    public function teams()
    {
        return $this->hasMany(Teams::class,'manager','id');
    }

    public function comment()
    {
        return $this->hasMany(Comments::class,'uid','id');
    }
}
