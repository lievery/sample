<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

<<<<<<< HEAD
=======
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Status;
use Auth;

>>>>>>> af1d543fc1df50f402cfd844ef6048b9bf61372f
class StaticPagesController extends Controller
{
    public function home()
    {
<<<<<<< HEAD
        return view('static_pages/home');
=======
        $feed_items = [];
        if(Auth::check()) {
            $feed_items = Auth::user()->feed()->paginate(30);
        }

        return view('static_pages/home',compact('feed_items'));
>>>>>>> af1d543fc1df50f402cfd844ef6048b9bf61372f
    }

    public function help()
    {
        return view('static_pages/help');
    }
<<<<<<< HEAD
=======

>>>>>>> af1d543fc1df50f402cfd844ef6048b9bf61372f
    public function about()
    {
        return view('static_pages/about');
    }
<<<<<<< HEAD

=======
>>>>>>> af1d543fc1df50f402cfd844ef6048b9bf61372f
}
