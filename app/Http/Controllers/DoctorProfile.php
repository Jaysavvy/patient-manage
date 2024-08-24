<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;

class DoctorProfile extends Controller
{
    public function show($id)
    {
        $doctor = Doctor::find($id);

        if (!$doctor) {
            // Handle the case where the doctor is not found, e.g., return a 404 page
            abort(404, 'Doctor not found');
        }

        return view('profile.doctor', ['doctor' => $doctor]);
    }
}
