<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UrlController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($shorturl)
    {
        // get long url from db

        $longUrl['longUrl'] = 'http://www.google.com';

        // $longUrl should be an array
        return view('url', $longUrl);
    }
}

