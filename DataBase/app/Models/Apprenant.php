<?php

// app/Models/Apprenant.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apprenant extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'password'];

    public function resultats()
    {
        return $this->hasMany(Resultat::class);
    }
}
