<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Leads extends Model
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'company',
        'area',
        'phone',
        'email',
        'service',
        'website',
        'msg',
    ];

    public function userProfile()
    {
        return $this->hasOne(userProfiles::class,'lid','id');
    }

    public function Deals()
    {
        return $this->hasMany(Deals::class,'lid','id');
    }

    function country(){
        return $this->belongsTo(Areas::class, 'code', 'area');
    }

    public function comment()
    {
        return $this->hasMany(Comments::class,'lid','id');
    }
}
