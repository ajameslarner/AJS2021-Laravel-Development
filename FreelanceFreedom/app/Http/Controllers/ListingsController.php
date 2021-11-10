<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;

class ListingsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listings = Listing::orderBy('created_at', 'desc')->paginate(5);
        return view('pages.listings')->with('listings', $listings);
    }

    /**
     * Show the form for creating a new listing.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('listings.create');
    }

    /**
     * Store a newly created listing into the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'short' => 'required',
            'body' => 'required',
            'image' => 'image|nullable|max:1999'
        ]);

        //Handle file upload
        if ($request->hasFile('image')) {
            $uploadedImageFilePath = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($uploadedImageFilePath, PATHINFO_FILENAME);
            $extention = $request->file('image')->getClientOriginalExtension();
            //Build image file path for storage
            $filenameToStore = $filename.'_'.time().'_'.auth()->user()->id.'.'.$extention;

            $path = $request->file('image')->storeAs('public/images', $filenameToStore);
        }

        //New Listing
        $listing = new Listing;
        $listing->title = $request->input('title');
        $listing->short = $request->input('short');
        $listing->body = $request->input('body');
        $listing->image = $filenameToStore;
        $listing->user_id = auth()->user()->id;
        $listing->save();

        return redirect('/listings')->with('welldone', 'Listing Created');
    }

    /**
     * Display the specified listing from the database.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $listing = Listing::find($id);
        return view('listings.item')->with('listing', $listing);
    }

    /**
     * Show the form for editing the specified listing from the database.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $listing = Listing::find($id);
        return view('listings.edit')->with('listing', $listing);
    }

    /**
     * Update the edited specified listing in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'short' => 'required',
            'body' => 'required',
            'image' => 'image|nullable|max:1999'
        ]);

        //Handle file upload
        if ($request->hasFile('image')) {
            $uploadedImageFilePath = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($uploadedImageFilePath, PATHINFO_FILENAME);
            $extention = $request->file('image')->getClientOriginalExtension();
            //Build image file path for storage
            $filenameToStore = $filename.'_'.time().'_'.auth()->user()->id.'.'.$extention;

            $path = $request->file('image')->storeAs('public/images', $filenameToStore);
        }

        $listing = Listing::find($id);
        $listing->title = $request->input('title');
        $listing->short = $request->input('short');
        $listing->body = $request->input('body');
        $listing->image = $filenameToStore;
        $listing->save();

        return redirect('/')->with('success', 'Listing Updated!');
    }

    /**
     * Remove the specified listing from the database.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $listing = Listing::find($id);
        $listing->delete();

        return redirect('/')->with('closewarning', 'Listing Deleted.');
    }
}
