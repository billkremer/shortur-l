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
     * Send the user to their shorturl.
     * @var string
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($shorturl)
    {

        // get long url from db   
        $lu = Shorturl::where('shorturl', $shorturl)->first()->value('url');

        $longUrl['longUrl'] = $lu;

        return view('url', $longUrl);
    }

    public function store()
    {

        
        do {
            $newSU = $this->alphanum(5);
        } while (Shorturl::where('shorturl', $newSU)->first()); 
        // if it exists already, get a new shortened url.

        // $su = new Shorturl
        // $su->userid = Auth::user()->id;
        // $su->url = 
        // $su->shorturl = $newSU;


        // $su->save();
        return redirect()->route('/home'); // ? get updated data first...
    }

    private function alphanum($numChar) 
    {
        $chars = 'abcdefghijkmnopqrstuvwxyzABCDEFGHIJKLMNPQRSTUVWXYZ23456789';
        $string = '';
        $max = strlen($chars) - 1;

        for ($i = 0; $i < $numChar; $i++) {
             $string .= $chars[random_int(0, $max)];
        }

        return $string;
    }



}

