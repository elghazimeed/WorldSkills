<?php
namespace App\Http\Controllers\patient;

use App\Http\Controllers\Controller;
use App\Models\Consultation;
use App\Models\Operation;
use App\Models\Patient;
use App\Models\User;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index()
    {
        $patients = User::where('profile_type','patient')->get();
        return view('patients.index', compact('patients'));
    }

    public function create()
    {
        return view('patients.create');
    }

    public function store(Request $request)
    {

        // Validate the patient data
        $data = $request->validate([
            'email' => 'required|email|unique:users,email',
            'cin' => 'required|string|max:255|unique:users,cin',
            'nom' => 'required|string|max:255',
            'prenom' => 'nullable|string|max:255',
            'adresse' => 'nullable|string|max:255',
            'tel' => 'nullable|string|max:15', 
        ]);

        // Create a new patient
        $patient = Patient::create();
        // Create a corresponding user with a profile type of "patient"
        $user = new User([
            'cin' =>$data['cin'],
            'nom' => $data['nom'],
            'prenom' =>$data['prenom'],
            'adresse' =>$data['adresse'],
            'tel' =>$data['tel'], 
            'email' => $data['email'], // Use the patient's email as the user's email
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // Set a default password 
            'profile_type' => 'patient',
            'profile_id' => $patient->id, // Associate the user with the newly created patient
        ]);

        $user->save();

        return redirect()->route('patients.index')->with('success', 'Patient created successfully.');
    }

    public function show(Patient $patient)
{
    $user = User::find($patient->id);
    $consultations=Consultation::where('patient_id',$user->profile_id)->get();
    $operations=Operation::where('patient_id',$user->profile_id)->get();
    return view('patients.show', compact('patient', 'user' ,'consultations','operations'));
}


    public function edit(Patient $patient)
    {
        $patient = User::find($patient->id);

        return view('patients.edit', compact('patient'));
    }

    public function update(Request $request, Patient $patient)
    {
        // Validate and update the patient data
        $data = $request->validate([
            'email' => 'required|email|unique:users,email,'. $patient->id,
            'cin' => 'required|string|max:255|unique:users,cin,'. $patient->id,
            'nom' => 'required|string|max:255',
            'prenom' => 'nullable|string|max:255',
            'adresse' => 'nullable|string|max:255',
            'tel' => 'nullable|string|max:15', 
        ]);

        $user = User::find($patient->id);
        $user->update($data);
        return redirect()->route('patients.index')->with('success', 'Patient updated successfully.');
    }

    public function destroy(Patient $patient)
    {
        $user = User::find($patient->id);
        $user->delete();
    
        // Delete the patient
        $patient->delete();
        return redirect()->route('patients.index')->with('success', 'Patient deleted successfully.');
    }

}
