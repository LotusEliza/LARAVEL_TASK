<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function showArtist(){
        $artists = \App\Artist::all();

        return view('artists')->with('artists', $artists);
    }

    public function showAlbums($id){
        $artist = \App\Artist::find($id);
        $albums = $artist->albums;

        return view('albums')->with('albums', $albums);
    }

    public function showTracks($id){
        $album = \App\Album::find($id);
        $artist = \App\Artist::find($album->ArtistId);
        $tracks = $album->tracks;

        return view('tracks')->with(compact('tracks', 'artist'));
    }

    public function showTrackInfo($id){
        $track = \App\Track::find($id);
        $album = \App\Album::find($track->AlbumId);
        $artist = \App\Artist::find($album->ArtistId);
        $genre = \App\Genre::find($track->GenreId);

        return view('trackInfo')->with(compact('track', 'album', 'artist', 'genre'));
    }
}
