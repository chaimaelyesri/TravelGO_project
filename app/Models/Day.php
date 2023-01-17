<?php

namespace App\Models;
use App\Models\Activity;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'activity_id',
        'adventure_id',
        'day_title',
        'day_description',
        'image',

    ];

    public function activity() {
        return $this->belongsTo(Activity::class);
    }
    public function adventure() {
        return $this->belongsTo(Adventure::class);
    }
    public function image() {
        return $this->Hasmany(Image::class);
    }
}
