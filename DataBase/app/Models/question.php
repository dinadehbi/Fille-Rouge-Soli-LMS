<?php

// app/Models/Question.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = ['qcm_id', 'text', 'type'];

    public function qcm()
    {
        return $this->belongsTo(QCM::class);
    }

    public function choices()
    {
        return $this->hasMany(Choice::class);
    }
}
