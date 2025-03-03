<?php

// app/Models/Formateur.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formateur extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'password'];

    public function qcms()
    {
        return $this->hasMany(QCM::class);
    }
}
