<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Show extends Model
{
    protected $table = 'shows';

    protected $primaryKey = 'id'; 

    protected $fillable = ['name', 'description', 'cinema', 'user_id' ];

    public function showVenues()
    {
        return $this->hasMany(showVenues::class);
    }

    public function headquarter() {
        return $this->hasOne(Headquarter::class);
    }

    public function show_times() {
        return $this->hasManyThrough(
            ShowTimes::class,
            showVenues::class,
            'show_id',
            'show_venues_id',
        ); 
    }
}
