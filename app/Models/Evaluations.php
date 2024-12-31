<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluations extends Model
{
    use HasFactory;

    protected $fillable = ['date', 'titre', 'coef', 'module_id'];

    public function module()
    {
        return $this->belongsTo(Module::class);
    }

    public function evaluationEleves()
    {
        return $this->hasMany(EvaluationEleve::class, 'evaluation_id');
    }
}

