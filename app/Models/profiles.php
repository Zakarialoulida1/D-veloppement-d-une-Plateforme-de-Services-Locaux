<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profiles extends Model
{
    use HasFactory;
    protected $fillable=[
        'name','email','password','bio','titre','category_id'
    ];

    public function getRouteKeyName()
    {
        return 'id';   //by default return the id
    }

    

    public function category()
    {
        return $this->belongsTo(categorie::class,'category_id');
    }
}
