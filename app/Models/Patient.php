<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Doctor;
use App\Models\User;
use App\Models\MedicalInformation;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'full_name',
        'email',
        'phone_number',
        'date_of_birth',
        'gender',
        'occupation',
        'address',
        'emergency_contact',       // JSON field
        'medical_information',     // JSON field
        'identification',          // JSON field
        'consents',                // JSON field
    ];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
