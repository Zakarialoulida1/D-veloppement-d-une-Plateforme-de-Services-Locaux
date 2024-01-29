<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profiles extends Model
{
    use HasFactory;
    protected $fillable=[
        'name','email','password','bio'
    ];

    public function getRouteKeyName()
    {
        return 'id';   //by default return the id
    }
}
