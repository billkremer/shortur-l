<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Shorturl;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Show the main page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // get current shorturls
        $userid = Auth::user()->id;

        $urls = Shorturl::where('userid', $userid)->get();

        return view('home', ['urls'=>$urls->all()]);
    }


    /**
     * Create a new shortened url.
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'url' => 'required|string|url',
        ]);

        do {
            $newSU = $this->alphanum(5);
        } while (Shorturl::where('shorturl', $newSU)->first()); 
        // if it exists already, get a new shortened 5 character url.

        $su = new Shorturl();
        $su->userid = Auth::user()->id;
        $su->url = $request->get('url');
        $su->shorturl = $newSU;

        $su->save();

        return redirect()->route('home'); 
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
