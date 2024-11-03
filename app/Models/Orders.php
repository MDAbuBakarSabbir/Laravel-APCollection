<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Orders extends Model
{
    protected $guarded = [''];

    public function oneDress(){

        return $this->hasOne(Dress::class,'id','dress_id');

    }
}
