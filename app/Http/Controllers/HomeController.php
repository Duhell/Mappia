<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    public function __invoke() : View
    {
        return view('LandingView')
        ->with([
            'images'=> \Illuminate\Support\Facades\File::files(public_path('restaurants'))
        ]);
    }
}
