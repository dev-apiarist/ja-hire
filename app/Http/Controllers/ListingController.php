<?php

namespace App\Http\Controllers;

use App\Http\Requests\ListingRequest;
use App\Models\Listing;
use Illuminate\Http\Request;

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
