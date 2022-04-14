<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class track_course extends Model
{
    use HasFactory;
    protected $fillable=[ 'track', 'track_id'];
    public function tracks(){
        return $this->belongsTo(track::class,'track_id','id');
    }
}
