<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barber extends Model
{
    protected $guarded = [];


    public function services()
    {
        return $this->belongsToMany(Service::class);
    }


    public function bookings(){
        return $this->hasMany(Booking::class);
    }


    public function getImageUrl(){
        if($this->image == null){
            return "default.png";
        }
        return asset('storage/barbers/' . $this->image);
    }
}
