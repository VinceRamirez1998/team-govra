<?php

namespace App\Http\Controllers;

use App\Models\NewsUpdates;
use Illuminate\Http\Request;
use Illuminate\View\View;

class NewsUpdateController extends Controller
{
    public function index(): View
    {
        $NP = NewsUpdates::query('news_updates')
        ->get();


    return view('user/user-index', compact('NP'));


    }
}