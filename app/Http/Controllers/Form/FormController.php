<?php

namespace App\Http\Controllers\Form;

use Illuminate\Http\Request;
use App\Models\CurriculumVitae;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class FormController extends Controller
{
    public function index()
    {
        return view('theme.index');
    }

    public function store(Request $request)
    {
        CurriculumVitae::create([
            'name' => $request->name,
            'address' => $request->address,
            'job_title' => $request->job_title,
            'birth_of_date' => $request->birth_of_date,
            'enterprise_name' => $request->enterprise_name,
            'enterprise_from' => $request->enterprise_from,
            'enterprise_to' => $request->enterprise_to,
            'enterprise_notes' => $request->enterprise_notes,
            'experience_name' => $request->experience_name,
            'experience_from' => $request->experience_from,
            'experience_to' => $request->experience_to,
            'experience_notes' => $request->experience_notes,
            'user_id' => Auth::user()->id,
        ]);

        return view('form.index')->with('success', 'تم التخزين بنجاح');


    }
}
