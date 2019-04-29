<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shorturl;

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

        //convert shorturl to 




        // get long url from db
print_r($shorturl);
// die;
        
        $lu = Shorturl::where('shorturl', $shorturl)->first()->value('url');
        // ->first()->value('url');
print_r($lu);
die;
        $longUrl['longUrl'] = $lu;

        // $longUrl should be an array
        return view('url', $longUrl);
    }
}

