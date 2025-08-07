<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\NewsStation;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    //
    public function index()
    {
        $news_facebook = NewsStation::where('type', 'Facebook')->get();
        $news_youtube = NewsStation::where('type', 'Youtube')->get();
        $news_tiktok = NewsStation::where('type', 'Tiktok')->get();
        $news_line = NewsStation::where('type', 'Line')->get();
        return view('welcome', compact(
            'news_facebook',
            'news_youtube',
            'news_tiktok',
            'news_line'
        ));
    }
}
