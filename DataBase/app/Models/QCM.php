<?php

// app/Models/QCM.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QCM extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'formateur_id'];

    public function formateur()
    {
        return $this->belongsTo(Formateur::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function resultats()
    {
        return $this->hasMany(Resultat::class);
    }
}
