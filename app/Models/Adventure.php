<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adventure extends Model
{
    use HasFactory;
    protected $fillable = [
        'city_id',
        'title',
        'small_description',
        'description',
        'location',
        'price',
        'cover',
        'stardate',
        'enddate',
        'level',

    ];
    public function images(){
        return $this->hasMany(Image::class);
    }
    public function days(){
        return $this->hasMany(Day::class);
    }
    public function Bookings()
    {
        return $this->hasMany(Booking::class);
    }
    public static function getCoverPath()
    {
        return 'uploads/adventures/';
    }
}
