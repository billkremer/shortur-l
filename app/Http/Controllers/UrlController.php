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
    }

    /**
     * Send the user to their shorturl.
     * @var string
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($shorturl)
    {

        $lu = Shorturl::where('shorturl', $shorturl);
        // get long url from db

        // check whether it exists?

        $lu->increment('hitcount');
         //update hit count

        $longUrl['longUrl'] = $lu->value('url');;

        return view('url', $longUrl);
    }

    // public function create(Request $request)
    // {
    //     $validatedData = $request->validate([
    //         'url' => 'required|string|url',
    //     ]);
    //     // print_r($validatedData); die;
        


    //     do {
    //         $newSU = $this->alphanum(5);
    //     } while (Shorturl::where('shorturl', $newSU)->first()); 
    //     // if it exists already, get a new shortened url.

    //     $su = new Shorturl();
    //     $su->userid = Auth::user()->id;
    //     $su->url = $request->get('url');
    //     $su->shorturl = $newSU;


    //     $su->save();
    //     return redirect()->route('home'); // ? get updated data first...
    // }

    // private function alphanum($numChar) 
    // {
    //     $chars = 'abcdefghijkmnopqrstuvwxyzABCDEFGHIJKLMNPQRSTUVWXYZ23456789';
    //     $string = '';
    //     $max = strlen($chars) - 1;

    //     for ($i = 0; $i < $numChar; $i++) {
    //          $string .= $chars[random_int(0, $max)];
    //     }

    //     return $string;
    // }



}

