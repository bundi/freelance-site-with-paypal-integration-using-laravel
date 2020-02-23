<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'level',
        'subject',
        'title',
        'details',
        'pages',
        'duration',
        'price'
    ];
}
