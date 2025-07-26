<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    //a link belongs to a user
    public function user() {
        return $this->belongsTo(related: User::class);
    }
}
