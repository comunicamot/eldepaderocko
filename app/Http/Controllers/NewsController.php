<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use App\Models\News;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use \Illuminate\Validation\Rule;

class NewsController extends Controller
{
    public $dirname_file = '/image/dashboard/news/';
    public function index(Request $request)
    {$filter = ["search" => $request->search];
        return Inertia::render('Dashboard/news/index', [
            'filters' => $filter,
            'news' => News::filter($filter)->orderBy('created_at','desc')->paginate(env('PAGINATE')),
            
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Dashboard/news/create', [
            'categories'=>Category::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreNewsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'title' => ['required', 'max:50'],
            'content' => ['required'],
            'category' => ['required'],
            'description' => ['required'],
            'image' => 'required|image|mimes:jpeg,jpg,png,gif,svg|max:'.env('FILE_LIMIT'),
            
        ]);

        if ($validator->fails()) {
            return Redirect::route('news.create')
                ->withErrors($validator)
                ->withInput();
        } else {
            try {
                $file = $request->file('image');
                $path = $request->getSchemeAndHttpHost() . $this->dirname_file;
                $name = rand(0, 100) . time() . '.' . $file->getClientOriginalExtension();
                $url = $path . $name;
                $file->move(public_path() . $this->dirname_file, $name);

                $news = News::create(
                    [
                        "title" => $request->title,
                        "image_url" => $url,
                        "image_name" => $name,
                        "description" => $request->description,
                        "content" => $request->content,
                        "user_id" => Auth::user()->id,
                        "category_id" =>$request->category
                    ]

                );
                return Redirect::route('news.index');
            } catch (\Throwable $th) {
                \Log::debug($th);
            }
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    { 
        $news = News::find($id);
       
        return Inertia::render('Dashboard/news/edit', [
            'news' => $news,
            'categories'=>Category::all(),
        ]);
    }

    
    public function update(Request $request, $id)
    {
        $validator = \Validator::make($request->all(), [
            'title' => ['required', 'max:50', Rule::unique('news')->ignore($id)],
            'content' => ['required'],
            'description' => ['required'],
            'category' => ['required'],
            'image'=>'nullable|image|mimes:jpeg,jpg,png,gif,svg|max:'.env('FILE_LIMIT')

        ]);

        \Log::debug($request);

        if ($validator->fails()) {
            return Redirect::route('news.edit', $id)
                ->withErrors($validator)
                ->withInput();
        } else {
            try {
                $news = News::find($id);
                if ($request->file('image') != null) {
                    $file = $request->file('image');
                    $path = $request->getSchemeAndHttpHost() . $this->dirname_file;
                    $name = rand(0, 100) . time() . '.' . $file->getClientOriginalExtension();
                    $url = $path . $name;
                    $file->move(public_path() . $this->dirname_file, $name);

                    $news->title = $request->title;
                    $news->category_id=$request->category;
                    $news->image_url = $url;
                    $news->image_name = $name;
                    $news->description = $request->description;
                    $news->content = $request->content;
                    $news->slug=null;
                    $news->save();

                } else {
                    $news->title = $request->title;
                    $news->category_id=$request->category;
                    $news->description = $request->description;
                    $news->slug=null;
                    $news->content = $request->content;
                    $news->save();
                }

                return Redirect::route('news.index');
            } catch (\Throwable $th) {
                \Log::debug($th);
            }
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            News::find($id)->delete();
            return Redirect::route('news.index');
        } catch (\Throwable $th) {
            return Redirect::route('news.index')
            ->withErrors(["errors"=>'no se elimino'])
            ->withInput();
        }
    }
}
