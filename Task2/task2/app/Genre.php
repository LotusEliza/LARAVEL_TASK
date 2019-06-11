<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $table = 'Genre';
    protected $primaryKey = 'GenreId';

    public function tracks()
    {
        return $this->hasMany(Track::class, 'GenreId', 'GenreId');
    }
}