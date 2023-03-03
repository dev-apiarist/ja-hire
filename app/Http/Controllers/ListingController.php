<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\ListingRequest;

class ListingController extends Controller
{
    //    
    /**
     * index
     *
     * @param  mixed $request
     * @return void
     */
    public function index(ListingRequest $request)
    {
        $listings = Listing::latest()->simplePaginate(6);
        return view('listings.index', ['listings' => $listings]);
    }
    /**
     * store
     *
     * @param  mixed $request
     * @return void
     */
    public function store(ListingRequest $request)
    {


        // Log::info('here');
        $formFields = $request->validated();
        // if ($request->hasFile('logo')) {
        //     $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        // }

        // $formFields['user_id'] = auth()->id();
        Listing::create($formFields);



        return redirect()->route('index');
        // ->with('message', 'Listing Created Successfully')
    }
    /**
     * show
     *
     * @param  mixed $request
     * @param  mixed $listing
     * @return void
     */
    public function show(ListingRequest $request, Listing $listing)
    {
        return view('listings.show', ['listing' => $listing]);
    }
    /**
     * create
     *
     * @param  mixed $request
     * @return void
     */
    public function create(ListingRequest $request)
    {
        return view('listings.create');
    }
    /**
     * delete
     *
     * @param  mixed $request
     * @param  mixed $listing
     * @return void
     */
    public function delete(ListingRequest $request, Listing $listing)
    {
    }
    /**
     * edit
     *
     * @param  mixed $request
     * @param  mixed $listing
     * @return void
     */
    public function edit(ListingRequest $request, Listing $listing)
    {
        return view('listings.edit', ['listing' => $listing]);
    }
    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $listing
     * @return void
     */
    public function update(ListingRequest $request, Listing $listing)
    {
    }
    /**
     * manage
     *
     * @param  mixed $request
     * @return void
     */
    public function manage(ListingRequest $request)
    {
    }
}
