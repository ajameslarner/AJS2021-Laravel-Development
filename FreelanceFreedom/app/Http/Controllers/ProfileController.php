<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Listing;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Create a new controller instance, only allows authorised visitors to access the functions.
     *
     * @return void
     */
    public function __construct()
    {
        //Middleware handled inside routes
        //$this->middleware('auth');
    }

    /**
     * Show the authenticated users home portal.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function profile()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('auth.profile')->with('listings', $user->listings);
    }

    /**
     * Show the admin dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboard()
    {
        $listings = Listing::orderBy('created_at', 'desc')->paginate(5);
        return view('auth.dashboard')->with('listings', $listings);
    }
}
