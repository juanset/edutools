<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{

    protected $fillable = [
        'content',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
}
