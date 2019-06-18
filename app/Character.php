<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'identifier', 'username', 'avatar',
    ];

}
