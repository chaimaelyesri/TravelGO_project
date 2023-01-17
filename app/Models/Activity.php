<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;
    protected $fillable = [
        'city_id',
        'title',
        'category',
        'description1',
        'description2',
        'price',
        'datedebut',
        'datefin',
        'cover',
        'adresse',
        'program'

    ];

    public function days(){
        return $this->hasMany(Day::class);
    }

    public function Bookings()
    {
        return $this->hasMany(Booking::class);
    }

    public function cities()
    {
        return $this->belongsTo(City::class);
    }
    public function images(){
        return $this->hasMany(Image::class);
    }

    // Helpers
    public static function getCoverPath()
    {
        return 'uploads/activities/';
    }

}
