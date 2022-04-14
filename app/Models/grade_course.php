<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class grade_course extends Model
{
    use HasFactory;
    protected $fillable=['course','grade_id'];

    public function grade(){
        return $this->belongsTo(grade::class,'grade_id','id');
    }
}
