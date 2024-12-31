<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eleves extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'prenom', 'date_Naissance', 'num_etudiant', 'email', 'image'];
    
    public function evaluations()
    {
        return $this->hasMany(EvaluationEleve::class, 'eleve_id');
    }

    public function moyenne()
    {
        $evaluations = $this->evaluations;
        $total = 0;
        $coef = 0;
        foreach ($evaluations as $evaluation) {
            $total += $evaluation->note * $evaluation->evaluation->coef;
            $coef += $evaluation->evaluation->coef;
        }
        if ($coef == 0) {
            return 0;
        }
        return $total / $coef;
    }
}
