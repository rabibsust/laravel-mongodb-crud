<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Offer;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Collection;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offers = Offer::get();

        return view('offer.index', compact('offers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('offer.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $offer = new Offer();
        $offer->title =  $request->input('title');
        $offer->store =  $request->input('store');
        $offer->details =  $request->input('details');
        $offer->category = $request->input('category') ;
        $offer->save();
        $offers = Offer::get();

        return view('offer.index', compact('offers'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $offer = Offer::where('_id', $id)->first();
        return view('offer.view', compact('offer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $offer = Offer::where('_id', $id)->first();
        return view('offer.edit', compact('offer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Offer::where('_id', $id)->update([
            'title' =>  $request->input('title'),
            'store' =>  $request->input('store'),
            'details' =>  $request->input('details'),
            'category' => $request->input('category')
        ]);
        $offers = Offer::get();

        return view('offer.index', compact('offers'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Offer::where('_id', $id)->delete();
        $offers = Offer::get();

        return view('offer.index', compact('offers'));
    }
}
