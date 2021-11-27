<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    //
    protected $fillable = [
        'name'
    ];
    public function User()
    {
        return $this->belongsTo('App\User');
    }
}
