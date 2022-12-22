<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userProfiles extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'uid',
        'lid',
        'tag',
        'title',
        'full_name',
        'fname',
        'mname',
        'lname',
        'gender',
        'birthday',
        'photo',
        'bgphoto',
        'bio',
        'marital',
        'country',
        'mobile',
        'iban',
        'career',
        'cv',
        'salary',
        'worktime',
        'started_at',
        'end_at',
        'passport',
        'work_permit',
        'visa',
        'team',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'birthday' => 'date',
        'started_at' => 'date',
        'end_at' => 'date',
    ];

    function user(){
        return $this->belongsTo(User::class, 'uid', 'id');
    }

    function lead(){
        return $this->belongsTo(Lealds::class, 'id', 'lid');
    }

    function teams(){
        return $this->belongsTo(Teams::class, 'team', 'id');
    }
}
