<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Dress extends Model
{
    protected $guarded = [''];
    // public function dress_code(): HasOne
    // {
    //     return $this->hasOne(Dress::class);
    // }
    public function oneDress(){

        return $this->hasOne(Dress::class,'id','dress_id');

    }
}
