<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Calendar;
use App\Models\News\NewsStation;
use App\Models\News\NewsUpdate;
use App\Models\Video\VideoMayor;
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

        $events = Calendar::all();

        $news_update_facebook = NewsUpdate::where('type', 'Facebook')
            ->orderBy('date_announce', 'desc')
            ->take(3)
            ->get();

        $video_mayor = VideoMayor::all()
            ->sortByDesc('created_at');

        return view('welcome', compact(
            'news_facebook',
            'news_youtube',
            'news_tiktok',
            'news_line',
            'events',
            'news_update_facebook',
            'video_mayor'
        ));
    }
}
