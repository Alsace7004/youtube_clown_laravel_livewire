<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
    //
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    // par defaut, le model biding utilise l'id , ici, we gonna use slug
    public function getRouteKeyName()
    {
        return 'slug';
    }

}
