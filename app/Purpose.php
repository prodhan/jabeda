<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purpose extends Model
{
    protected $table='purposes';
    protected $fillable=[
        'type',
        'name',
    ];

}
