<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class showTimes extends Model
{
    public function show() 
    {
        return $this->belongTo(Show::class);
    }
}
