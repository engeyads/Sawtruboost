<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    use HasFactory;

    /** Created with ❤️ by Iyad Sammour
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'titleen',
        'titlear',
        'titletr',
        'featured_image',
        'bodyen',
        'bodyar',
        'bodytr',
        'uid',
        'seo_keywordsen',
        'seo_descriptionen',
        'seo_keywordsar',
        'seo_descriptionar',
        'seo_keywordstr',
        'seo_descriptiontr',
        'publish_date',
        'privacy'
    ];

    function author(){
        return $this->belongsTo(User::class, 'uid', 'id');
    }

    public function post_images()
    {
        return $this->hasMany(PostImage::class,'post_id','id');
    }

    public function comments()
    {
        return $this->hasMany(Comments::class,'pid','id');
    }
}
