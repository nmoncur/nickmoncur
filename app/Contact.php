<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'name',
        'email',
        'number',
        'notes'
    ];

    public function emails()
    {
        return $this->hasMany('App\Mail');
    }
}
