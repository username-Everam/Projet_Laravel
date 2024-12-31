<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class evaluationEleve extends Model
{
    use HasFactory;

    protected $fillable = ['note', 'eleve_id', 'evaluation_id'];

    public function eleve()
    {
        return $this->belongsTo(Eleves::class, 'eleve_id');
    }
    public function evaluation()
    {
        return $this->belongsTo(Evaluations::class, 'evaluation_id');
    }
}

