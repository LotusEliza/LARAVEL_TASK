<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    protected $table = 'Track';
    protected $primaryKey = 'TrackId';

    public function album()
    {
        return $this->belongsTo(Album::class, 'AlbumId', 'AlbumId');
    }
}