<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
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
