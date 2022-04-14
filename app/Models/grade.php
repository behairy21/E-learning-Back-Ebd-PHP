<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class grade extends Model
{
    use HasFactory;
    protected $fillable=['grade'];

    public function gradeHasCourse(){
        return $this->hasMany(grade_course::class,'grade_id','id');
    }
}
