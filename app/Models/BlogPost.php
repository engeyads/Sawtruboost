<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'featured_image', 'body', 'uid','seo_keywords','seo_description'];

    function author(){
        return $this->belongsTo(User::class, 'uid', 'id');
    }

    public function post_images()
    {
        return $this->hasMany(PostImage::class,'post_id','id');
    }
}
