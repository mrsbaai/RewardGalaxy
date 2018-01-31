<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reward extends Model
{
    protected $table = 'rewards';
    protected $fillable = [
        'title', 'tag', 'short_description','long_desctiption','thumbnail','coins','created_at','updated_at'
    ];
}
