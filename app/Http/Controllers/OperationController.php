<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use App\Models\Operation;
use App\Models\User;
use Illuminate\Http\Request;

class OperationController extends Controller
{
    
public function index(Request $request)
{
    $patients =User::where('profile_type','patient')->get();
    $doctors = User::where('profile_type','medecin')->get();

    // Initialize a query for consultations
    $query = Operation::query();

    // Apply filters if provided
    if ($request->filled('date' ) && $request->filled('end_date' )) {
        $dateRange = [
            $request->input('date'),
            $request->input('end_date')
        ];
    
        $query->whereBetween('Date', $dateRange);    
    }
    elseif ($request->filled('date')) {
        $query->whereDate('Date', $request->input('date'));
    }

    if ($request->filled('patient_id')) {
        $query->where('patient_id', $request->input('patient_id'));
    }

    if ($request->filled('doctor_id')) {
        $query->where('doctor_id', $request->input('doctor_id'));
    }

    // Get the list of consultations based on the applied filters
    $operations = $query->get();

    // If no filters are applied, return all consultations
    if (!$request->filled('date') && !$request->filled('patient_id') && !$request->filled('doctor_id')) {
        $operations = Operation::all();
    }

    return view('operations.index', compact('operations', 'patients', 'doctors'));
}

}
