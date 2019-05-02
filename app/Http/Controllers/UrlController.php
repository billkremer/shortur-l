<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shorturl;
use Illuminate\Support\Facades\Auth;


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
        // not authenticating this
    }


    /**
     * Send the user to their shorturl.
     * @param string
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($shorturl)
    {
        $lu = Shorturl::where('shorturl', $shorturl);
        // get long url from db

        $lu->increment('hitcount');
         //update hit count

        $longUrl['longUrl'] = $lu->value('url');

        return view('url', $longUrl);
    }


}
