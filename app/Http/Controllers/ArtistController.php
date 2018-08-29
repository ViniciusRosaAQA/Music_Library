<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use App\Artist;

class ArtistController extends Controller
{

    public function index()
    {
        $artista_view = Artist::all()->toArray();

        return view('view_artist', compact('artista_view')); // Retorna as informações do select
    }

    public function register()
    {
        return view('register_artist'); // renderiza o registro do artista
    }


    /**
     * Store artist
     * 
     * @param Request $request
     * @return Response
     * 
     */

    public function store(Request $request)
    { // Create the artist on DB

        $arti = new Artist ();

        $input = $request->all();
        $arti->create($input);

        return $this->index();
    }
}
    