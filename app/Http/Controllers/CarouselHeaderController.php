<?php

namespace App\Http\Controllers;

use App\Models\CarouselHeader;
use App\Http\Requests\StoreCarouselHeaderRequest;
use App\Http\Requests\UpdateCarouselHeaderRequest;

class CarouselHeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.carousel-header.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCarouselHeaderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCarouselHeaderRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CarouselHeader  $carouselHeader
     * @return \Illuminate\Http\Response
     */
    public function show(CarouselHeader $carouselHeader)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CarouselHeader  $carouselHeader
     * @return \Illuminate\Http\Response
     */
    public function edit(CarouselHeader $carouselHeader)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCarouselHeaderRequest  $request
     * @param  \App\Models\CarouselHeader  $carouselHeader
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCarouselHeaderRequest $request, CarouselHeader $carouselHeader)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CarouselHeader  $carouselHeader
     * @return \Illuminate\Http\Response
     */
    public function destroy(CarouselHeader $carouselHeader)
    {
        //
    }
}
