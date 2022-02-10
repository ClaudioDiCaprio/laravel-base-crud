<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;
class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all(); 
        
        return view("comics.index",compact("comics"));
        // dd($comics);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("comics.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        // $comic = Comic::find($id);
        // dd($comic);
        
        return view("comics.show",compact("comic"));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        // recupero la risorsa che voglio modificare 
        // dd($comic);
        //restituisco il form per l'editing di questa risorsa
        return view("comics.edit",compact("comic"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        // prendo tutti i dati del form
        $data = $request->all();
        // aggiorno la risorsa con i  nuovi dati
        $comic->name = $data["name"];
        $comic->description = $data["description"];
        // $comic->type = $data["type"];
        $comic->price = $data["price"];
        $comic->sale_data = $data["sale_data"];

       if( !empty($data['image'] ) ){
        $comic->image = $data["image"];
       }
        $comic->save();
        //restituisco la pagina show della risorsa modificata
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route("comics.index");
    }
}
