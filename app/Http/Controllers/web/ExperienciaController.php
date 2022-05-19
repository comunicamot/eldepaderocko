<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ExperienciaController extends Controller
{
    public function experiencia()
    {
        return Inertia::render('web/experiencia/experiencia', [
            'event' => 12,
        ]);
    }
}
