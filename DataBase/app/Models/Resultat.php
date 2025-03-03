<?php

// app/Models/Resultat.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resultat extends Model
{
    use HasFactory;

    protected $fillable = ['qcm_id', 'apprenant_id', 'score', 'completed_at'];

    public function qcm()
    {
        return $this->belongsTo(QCM::class);
    }

    public function apprenant()
    {
        return $this->belongsTo(Apprenant::class);
    }
}
