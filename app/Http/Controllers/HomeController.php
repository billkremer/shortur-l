<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Controllers\Controller;
use \Auth;
// use Illuminate\Foundation\Auth\AuthenticatesUsers;
// use Illuminate\Support\Facades\Auth;

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
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        // get current shorturls
        $userid = Auth::user()->id;

        $urls = Shorturl::where('userid', $userid)->get();

        return view('home', $urls);
    }


    public function getRandShortUrl ()
    {

    }

    /**
     * Get a validator for an incoming url request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'url' => ['required', 'string', 'url' ],
        ]);
    }




}


