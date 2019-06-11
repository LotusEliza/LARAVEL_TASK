<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $table = 'Artist';
    protected $primaryKey = 'ArtistId';

    public function albums(){
        return $this->hasMany(Album::class, 'ArtistId', 'ArtistId');

    }
}
