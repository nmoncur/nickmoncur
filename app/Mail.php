<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mail extends Model
{
    protected $table = 'mail';

    protected $fillable = [
        'contact_id',
        'template'
    ];

    public function contact() {
        return $this->belongsTo('App\Contact');
    }
}
