<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PerfilController extends Controller
{
    public function perfil()
    {
        return Inertia::render('web/perfil/perfil', [
            'event' => 12,
        ]);
    }
}
