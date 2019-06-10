<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $table = 'Album';
    protected $primaryKey = 'AlbumId';

    public function artist()
    {
        return $this->belongsTo(Artist::class, 'ArtistId', 'ArtistId');
    }

    public function tracks()
    {
        return $this->hasMany(Track::class, 'AlbumId', 'AlbumId');
    }
}