<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Inertia\Inertia;

class NewController extends Controller
{
    public function index(Request $request)
    {
        \Log::debug($request);
        $filter = ["q" => $request->q, "date" => $request->date];
        return Inertia::render('web/new/index', [
            'filters' => $filter,
            'news' => News::filterW($filter)->select("news.*", "users.name as user")
                ->join("users", "users.id", "=", "news.user_id")
                ->orderBy("news.created_at", "desc")->paginate(env('PAGINATE_NEWS')),
            'news_categories' => News::orderBy('created_at')
                ->join("categories", "categories.id", "=", "news.category_id")
                ->select("news.title","news.slug","news.created_at","news.image_url", "categories.name as category")
                ->get()->groupBy(function ($data) {
                return $data->category;
            }),
        ]);
    }

    public function detail(Request $request,$slug)
    {
       $news = News::where("slug","=",$slug)->join("users","users.id","=","news.user_id")
       ->select("news.*","users.name as user")->get();
       \Log::Debug($news);
       if(count($news) > 0){
        
        return Inertia::render('web/new/detail', [
            'news' => $news[0],
            'news_categories' => News::orderBy('created_at')
                ->join("categories", "categories.id", "=", "news.category_id")
                ->select("news.title","news.slug","news.created_at","news.image_url", "categories.name as category")
                ->get()->groupBy(function ($data) {
                return $data->category;
            }),
            'news_relations'=>News::where("news.category_id","=",$news[0]->category_id)
            ->join("users", "users.id", "=", "news.user_id")
            ->select("news.title","news.slug","news.created_at","news.image_url","news.description", "users.name as user")
            ->where("news.id","!=",$news[0]->id)
            ->orderBy("news.created_at",'desc')->limit(env('LIMIT_NEW_RELATION'))->get()
        ]);
       }
       return redirect()->route('noticia');
        
    }
}
