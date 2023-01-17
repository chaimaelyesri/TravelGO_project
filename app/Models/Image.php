<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'path',
        'activity_id',
        'adventure_id',


    ];
    public function activity() {
        return $this->belongsTo(Activity::class);

    }
    public function adventure() {
        return $this->belongsTo(Adventure::class);

    }
    public function day() {
        return $this->belongsTo(Day::class);

    }
}
