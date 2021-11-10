<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Create a new controller instance, allows access to un-authorisad visitors to access the functions.
     *
     * @return void
     */
    public function __construct()
    {
        //Middleware handled inside routes
        //$this->middleware('guest');
    }

    /**
     * Returns the index page.
     *
     * @return void
     */
    public function index() {
        $title = 'Freelance Freedom';
        return view('pages.index')->with('title', $title);
    }

    /**
     * Returns the about page.
     *
     * @return void
     */
    public function about() {
        $title = 'Who are we?';
        return view('pages.about')->with('title', $title);
    }
}
