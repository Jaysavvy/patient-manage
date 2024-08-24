<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DoctorController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Models\Doctor;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/application', function () {
    return view('application');
});

Route::get('/appointment', function () {
    return view('appointment');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::get('/doctor/{id}', function (string $id) {

//     $doctor = Doctor::find($id);

//     if (!$doctor) {
//         // Handle the case where the doctor is not found, e.g., return a 404 page
//         App::abort(404, 'Doctor not found');
//     }

//     // dd($doctor->toArray());


//     return view('profile.doctor', ['doctor' => $doctor]);
// });

Route::get('/doctor/{id}', [DoctorController::class, 'show'])->name('profile.doctor');


require __DIR__ . '/auth.php';
