<?php

namespace App\Http\Controllers;

use App\Actions\ShortenUrlAction;
use App\Models\Url;
use Illuminate\Http\Request;
use Inertia\Inertia;

class UrlController extends Controller
{
    public function index(Request $request, ShortenUrlAction $action, Url $urlModel): \Inertia\Response
    {
        return Inertia::render('Url/Index');
    }
}
