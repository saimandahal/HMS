<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class newrecord extends Model
{
    //
    protected $fillable=[
        'firstname',
        'middlename',
        'lastname',
        'city',
        'state',
        'zip',
        'optional',
        'email',
        'profession',
        'age',
        'type',
        'guestno',
        'noroom',
       'alloted',
        'spa',
        'ac',
        'parking',
        'food',
        'transport'
        ];
}
