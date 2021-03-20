<?php

namespace App\Http\Controllers;
use App\Models\Favourites;
use App\Models\Movies;
use Illuminate\Http\Request;

class FavouritesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return Favourites::orderBy('created_at', DESC)->get();
        $favourites = Favourites::latest()->get();
        return view('favourites')->with('favourites', $favourites);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
 
        $validateData = $request->validate([
            'title' => 'required|max:255',
            'year' => 'required|integer',
            'category' => 'required|max:255'
        ]);
       
        if (Favourites::where('title', $request->title)->exists()) {
            return redirect('/')->with('message', 'Already in Favourites');
        } else {
            $favourites = Favourites::create([
                'id' => $request->id,
                'title' => $request->title,
                'year' => $request->year,
                'category' => $request->category
            ]);
        }
        
 
        return redirect('favourites');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Favourites  $favourites
     * @return \Illuminate\Http\Response
     */
    public function show(Favourites $favourites)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Favourites  $favourites
     * @return \Illuminate\Http\Response
     */
    public function edit(Favourites $favourites)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Favourites  $favourites
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Favourites $favourites)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Favourites  $favourites
     * @return \Illuminate\Http\Response
     */
    public function destroy(Favourites $favourites, $id)
    {
        $favourites = Favourites::find($id);
        $favourites->delete();
        return redirect('favourites');
    }
}
