<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teams extends Model
{
    use HasFactory;

    /** Created with ❤️ by Iyad Sammour
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'tag',
        'manager',
        'name',
        'photo',
        'bgphoto',
        'bio',
        'country',
        'worktime',
        'started_at',
        'end_at'
    ];

    function manager(){
        return $this->belongsTo(User::class, 'id', 'manager');
    }

    function profile(){
        return $this->hasMany(userProfiles::class, 'team', 'id');
    }
}
