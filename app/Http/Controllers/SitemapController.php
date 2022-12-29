<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;

class SitemapController extends Controller
{
    public function index()
    {
        $post = BlogPost::where([
            ['publish_date' ,'<=',Date('Y-m-d')],
            ['privacy','=','1'],
        ])->orderBy('updated_at', 'desc');

        return response()->view('sitemap.index', [
            'post' => $post,
        ])->header('Content-Type', 'text/xml');
    }
}
