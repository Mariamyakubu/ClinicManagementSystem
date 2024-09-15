<?php

// Patient.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'age', 'doctor_id', 'ailment'];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
}
