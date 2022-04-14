<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class track extends Model
{
    use HasFactory;
    protected $fillable=['track'];

    public function trackHasCourse(){

        return $this->hasMany(track_course::class,'track_id','id');
    }
}
