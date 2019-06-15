<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ban extends Model
{

    public function issuer()
    {
        return $this->belongsTo(Player::class);
    }

    public function target()
    {
        return $this->belongsTo(Player::class);
    }

}
