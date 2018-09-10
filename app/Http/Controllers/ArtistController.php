<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artist;

class ArtistController extends Controller
{

    public function index()
    {
        $artist_view = $this->artilistlist();

        return view('view_artist', compact('artist_view')); // Return data of select
    }

    public function register()
    {
        return view('register_artist'); // renderiza o registro do artista
    }

    /**
     * Select one artist
     *
     * @param Request $request
     * @return Response
     *
     */

    public function artistinfo (Request $request)
    { // Get data of artist selected on DB
        $artistinfo = Artist::where('name', $request['name'])->get();

        return view('view_artist_info', compact('artistinfo'));
    }

    public function editview()
    {

        $artist_view = $this->artilistlist();

        return view('edit_artist', compact('artist_view'));
    }

    public function deleteview () {
        $artist_view = $this->artilistlist();

        return view('delete_artist', compact('artist_view'));
    }

    /**
     * Delete artist
     *
     * @param Request $request
     * @return Response
     *
     */

    public function deleteartist (Request $request)
    { // Delete the artist selected on DB

        $deleteartist = Artist::where('name', $request['name'])->forceDelete();

        return $this->index();
    }

    private function artilistlist()
    { // Get all artist of DB
        return Artist::all()->toArray();
    }


    /**
     * Update artist
     *
     * @param Request $request
     * @return Response
     *
     */

    public function editupdate(Request $request)
    { // Update artist on DB

        $selectartist = Artist::where('name', $request['artista'])->update($request->except('artista','_token'));

        return index();
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

    