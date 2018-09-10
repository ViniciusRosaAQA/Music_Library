<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;
use App\Artist;

class AlbumController extends Controller
{
    public function index () {
        
        $album_view = $this->albumselect();
        
        return view ('view_album', compact ('album_view'));
    }

    public function register () {
        $album_register_view = $this->artistselect();

        return view ('register_album', compact ('album_register_view'));
    }

    private function albumselect () { // Get all data of Album on DB
        return Album::all()->toArray();
    }

    private function artistselect () { // Get all data of Artist on DB
        return Artist::all()->toArray();
    }

    /**
     * Info album
     *
     * @param Request $request
     * @return Response
     *
     */

    public function albuminfo (Request $request)
    { // Get data of one album selected
        $albuminfo = Album::where('name', $request['name'])->get();

        return view('view_album_info', compact('albuminfo'));
    }

    public function editview (){
        $album_view = $this->albumselect();
        $artist_info = $this->artistselect();

        return view('edit_album', compact('album_view','artist_info'));
    }

    /**
     * Update album
     *
     * @param Request $request
     * @return Response
     *
     */

    public function editupdate (Request $request)
    { // Update the album
        $selectalbum = Album::where('name', $request['albumname'])->update($request->except('albumname','_token'));

        return $this->index();
    }

    public function deleteview ()
    {
        $album_view = $this->albumselect();

        return view('delete_album', compact('album_view'));
    }

    /**
     * Delete album
     *
     * @param Request $request
     * @return Response
     *
     */

    public function deletealbum (Request $request)
    { // Delete the album selected of DB
        $deletealbum = Album::where('name', $request['name'])->forceDelete();

        return $this->index();
    }

     /**
     * Store album
     * 
     * @param Request $request
     * @return Response
     * 
     */

    public function store(Request $request)
    { // Create the album on DB

        $alb = new Album ();

        $input = $request->all();
        $alb->create($input);

        return $this->index();
    }
}