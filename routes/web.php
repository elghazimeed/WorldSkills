<?php

use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\OperationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\patient\PatientController;
use App\Models\Consultation;
use App\Models\Operation;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $operations=Operation::count();
    $consultations=Consultation::count();
    $patients=User::where('profile_type','patient')->count();
    $infermier=User::where('profile_type','infermier')->count();
    $medecins=User::where('profile_type','medecin')->count();
    return view('dashboard',compact('operations','consultations','patients','infermier','medecins'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::resource('patients', PatientController::class);
Route::get('/consultations', [ConsultationController::class, 'index'])->name('consultations.index');
Route::get('/operations', [OperationController::class, 'index'])->name('operations.index');


require __DIR__.'/auth.php';


