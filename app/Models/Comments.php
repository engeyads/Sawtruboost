<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;

    /** Created with ❤️ by Iyad Sammour
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'pid',
        'lid',
        'byid',
        'content',
        'available',
        'removed_at',
        'removed_by'
    ];

    /** Created with ❤️ by Iyad Sammour
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'updated_at' => 'datetime',
        'removed_at' => 'datetime',
    ];

    function user(){
        return $this->belongsTo(User::class,'uid','id');
    }

    public function blog()
    {
        return $this->belongsTo(BlogPost::class,'pid','id');
    }

    public function Lead()
    {
        return $this->belongsTo(Leads::class,'lid','id');
    }
}
