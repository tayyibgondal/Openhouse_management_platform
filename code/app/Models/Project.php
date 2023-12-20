<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    
    protected $fillable = ['token', 'password', 'name', 'description', 'category', 'location'];

    public function students()
    {
        return $this->hasMany(Student::class);
    }
    
    public function evaluators() {
        return $this->belongsToMany(Evaluator::class);
    }
}

