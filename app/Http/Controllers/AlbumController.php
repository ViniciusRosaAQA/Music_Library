<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;
use App\Artist;

class AlbumController extends Controller
{
    public function index () {
        
        $album_view = Album::all()->toArray();
        
        return view ('view_album', compact ('album_view'));
    }

    public function register () {
        $album_register_view = Artist::all()->toArray();

        return view ('register_album', compact ('album_register_view'));
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