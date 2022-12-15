<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leads extends Model
{
    use HasFactory;

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
}
