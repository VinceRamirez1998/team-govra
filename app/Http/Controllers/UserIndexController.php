<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\NewsUpdates;
use App\Models\Announcement;
use App\Models\Examination;
use Illuminate\View\View;

class UserIndexController extends Controller
{

    // public function NewsUpdates()
    // {
    //     $NP = NewsUpdates::query('news_updates')
    //     ->get();


    // return view('user/user-index', compact('NP'));


    // }

    // public function announce()
    // {
    //     $AN = Announcement::query('announcements')
    //     ->get();

    //     return view('user/user-index', compact('AN'));

    // }
    public function ShowData(): View
    {
        $announcements = Announcement::get();
        $examinations = Examination::get();
        $newsUpdates = NewsUpdates::get(); 

        return view('user.user-index', compact('announcements','examinations','newsUpdates'));
    }
    

   
    

   
    
}