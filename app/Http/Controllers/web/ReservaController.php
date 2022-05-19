<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ReservaController extends Controller
{
    public function reserva()
    {
        return Inertia::render('web/reserva/reserva', [
            'event' => 12,
        ]);
    }
}
