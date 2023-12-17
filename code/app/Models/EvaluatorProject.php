<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvaluatorProject extends Model
{
    use HasFactory;

    protected $fillable = ['evaluator_id', 'project_id'];
}
