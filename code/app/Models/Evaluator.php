<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluator extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'password', 'category'];

    public function projects() {
        return $this->belongsToMany(Project::class);
    }
}
