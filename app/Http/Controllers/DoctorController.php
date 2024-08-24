<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use Illuminate\Support\Facades\App;

class DoctorController extends Controller
{
    public function show($id)
    {
        $doctor = Doctor::find($id);

        if (!$doctor) {
            // Handle the case where the doctor is not found, e.g., return a 404 page
            App::abort(404, 'Doctor not found');
        }

        // dd($doctor->toArray());
        return view('profile.doctor', ['doctor' => $doctor]);
    }
}
