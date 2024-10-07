<?php

namespace App\Http\Controllers;

use App\Models\c;
use App\Mail\PatientsIssue;
use Illuminate\Http\Request;
use App\Models\patients_issue;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class InformationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator  = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'contact' => 'required',
            'pincode' => 'required',
            'describe_issue' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back();
        } else {
            $patientIssue =  new patients_issue();
            $patientIssue->name = $request->name;
            $patientIssue->email = $request->email;
            $patientIssue->contact = $request->contact;
            $patientIssue->pincode = $request->pincode;
            $patientIssue->describe_issue = $request->describe_issue;
            $patientIssue->save();

            $mailData = [
                'title' => 'Patients Query',
                'patient' => $patientIssue,
            ];

            Mail::to('rajdighe16@gmail.com')->send(new PatientsIssue($mailData));
            session()->flash('success', 'Your request has been sent!');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(c $c)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(c $c)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, c $c)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(c $c)
    {
        //
    }
}
