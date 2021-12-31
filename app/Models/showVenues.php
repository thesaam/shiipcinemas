<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class showVenues extends Model
{
    use HasFactory;

    protected $table = 'show_venues';

    protected $primaryKey = 'id';

    protected $fillable = ['show_venues'];

    public function show() 
    {
        return $this->belongTo(Show::class);
    }

}
