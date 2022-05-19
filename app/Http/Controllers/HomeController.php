<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Models\News;

class HomeController extends Controller
{
    public function index(Request $request)
    {

        $news = News::join("users","users.id","=","news.user_id")
        ->select("news.*","users.name")->latest()->take(3)->get();

        // \Log::Debug($news);
        if(count($news) > 0){
         return Inertia::render('web/home', [
             'news' => $news
         ]);
        }
         return Inertia::render('web/home', [
            'event' => 12,
        ]);

    }
    public function us(Request $request)
    {
        return Inertia::render('web/us', [
            'event' => 12,
        ]);
    }

    public function contact(Request $request)
    {
        return Inertia::render('web/contact', [
            'event' => 12,
        ]);
    }

    function complaintsBook(){
        return Inertia::render('web/complaint', [
            'event' => 12,
        ]);
    }
    
}
