<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Resume;
use Illuminate\Http\Request;
use DB;

class ResumeController extends Controller
{
    public function createResume(Request $request) {
        $name = $request->name;
        $phone = $request->phone;
        $email = $request->email;
        $degree_title = $request->degree_title ?? NULL;
        $institution_name = $request->institution_name ?? NULL;
        $cgpa = $request->cgpa ?? NULL;
        $job_title = $request->job_title ?? NULL;
        $company_name = $request->company_name ?? NULL;
        $description = $request->description ?? NULL;

        $resume = Resume::create([
            'name' => $name,
            'phone' => $phone,
            'email' => $email,
            'degree_title' => $degree_title,
            'institution_name' => $institution_name,
            'cgpa' => $cgpa,
            'job_title' => $job_title,
            'company_name' => $company_name,
            'description' => $description,
        ]);

        $resumeDetails = DB::table('resumes')->select('id', 'name')->orderBy('created_at', 'desc')->first();

        return view('/resume-created', compact('resumeDetails'));
    }

    public function viewResume($id) {
        $resumeDetails = DB::table('resumes')->select('*')->where('id', $id)->first();

        return view('/view-resume', compact('resumeDetails'));
    }
}
