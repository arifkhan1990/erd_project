<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApplicationRequest;
use App\Models\PersonalForm;
use App\Models\Educational;
use App\Models\Banking;
use App\Models\Travel;
use Illuminate\Http\Request;
use DB;
use Auth;

class ApplicationController extends Controller
{
    // Display form to create new entries
    public function create()
    {
        return view('user.application.application');
    }

    // Store new form entries
    public function store(Request $request)
    {
        
        DB::beginTransaction();
        try {
            // Personal Form
            $personalForm = new PersonalForm();
            $this->savePersonalForm($request, $personalForm);

            // Educational Form
            $educational = new Educational();
            $this->saveEducationalForm($request, $educational);

            // Banking Form
            $banking = new Banking();
            $this->saveBankingForm($request, $banking);

            // Travel Form
            $travel = new Travel();
            $this->saveTravelForm($request, $travel);

            DB::commit();
            return redirect()->route('user.dashboard')->with('success', 'Application submitted successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e);
            return redirect()->back()->with('error', 'Failed to submit the form: ' . $e->getMessage());
        }
    }

    // Display a list of form entries
    public function index()
    {
        $personalForms = PersonalForm::all();
        $educationals = Educational::all();
        $bankings = Banking::all();
        $travels = Travel::all();

        return view('user.application.application', compact('personalForms', 'educationals', 'bankings', 'travels'));
    }

    // Display form to edit an entry
    public function edit($id)
    {
        $personalForm = PersonalForm::findOrFail($id);
        $educational = Educational::where('user_id', $personalForm->user_id)->first();
        $banking = Banking::where('user_id', $personalForm->user_id)->first();
        $travel = Travel::where('user_id', $personalForm->user_id)->first();

        return view('form.edit', compact('personalForm', 'educational', 'banking', 'travel'));
    }

    // Update an entry
    public function update(Request $request, $id)
    {
        DB::beginTransaction();
        try {
            // Personal Form
            $personalForm = PersonalForm::findOrFail($id);
            $this->savePersonalForm($request, $personalForm);

            // Educational Form
            $educational = Educational::where('user_id', $personalForm->user_id)->first();
            $this->saveEducationalForm($request, $educational);

            // Banking Form
            $banking = Banking::where('user_id', $personalForm->user_id)->first();
            $this->saveBankingForm($request, $banking);

            // Travel Form
            $travel = Travel::where('user_id', $personalForm->user_id)->first();
            $this->saveTravelForm($request, $travel);

            DB::commit();
            return redirect()->route('form.index')->with('success', 'Form updated successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Failed to update the form: ' . $e->getMessage());
        }
    }

    // Delete an entry
    public function destroy($id)
    {
        DB::beginTransaction();
        try {
            $personalForm = PersonalForm::findOrFail($id);
            $personalForm->delete();

            $educational = Educational::where('user_id', $personalForm->user_id)->first();
            if ($educational) {
                $educational->delete();
            }

            $banking = Banking::where('user_id', $personalForm->user_id)->first();
            if ($banking) {
                $banking->delete();
            }

            $travel = Travel::where('user_id', $personalForm->user_id)->first();
            if ($travel) {
                $travel->delete();
            }

            DB::commit();
            return redirect()->route('form.index')->with('success', 'Form deleted successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Failed to delete the form: ' . $e->getMessage());
        }
    }

    // Helper methods to save form data
    private function savePersonalForm(Request $request, $personalForm)
    {   
        $personalForm->fill($request->all());
        if ($request->hasFile('image')) {
            $personalForm->image = $request->file('image')->store('images','public');
        }
        if ($request->hasFile('digital_signature_image')) {
            $personalForm->digital_signature_image = $request->file('digital_signature_image')->store('images','public');
        }
        if ($request->hasFile('passport_image')) {
            $personalForm->passport_image = $request->file('passport_image')->store('images','public');
        }
        if ($request->hasFile('nid_image')) {
            $personalForm->nid_image = $request->file('nid_image')->store('images','public');
        }
        if ($request->hasFile('certification_image')) {
            $personalForm->certification_image = $request->file('certification_image')->store('images','public');
        }
        $personalForm->save();
    }

    private function saveEducationalForm(Request $request, $educational)
    {

        $educational->fill($request->all());

        if ($request->ssc_exam_result_type == 'gpa') {
            $edu_data->ssc_exam_result = $request->ssc_exam_result_gpa . " Out of " . $request->ssc_exam_result_gpa_max;
        }else {
            $educational->ssc_exam_result = $request->ssc_exam_result_division;
        }

        if($request->hsc_exam_result_type == 'gpa') {
            $educational->hsc_exam_result = $request->hsc_exam_result_gpa . " Out of " . $request->hsc_exam_result_gpa_max;
        }else{
            $educational->hsc_exam_result = $request->hsc_exam_result_division;
        }

        $educational->user_id = $request->user_id;
        $educational->save();
    }

    private function saveBankingForm(Request $request, $banking)
    {
        $banking->fill($request->all());
        $banking->user_id = $request->user_id;
        $banking->save();
    }

    private function saveTravelForm(Request $request, $travel)
    {
        $travel->fill($request->all());
        $travel->user_id = $request->user_id;
        $travel->save();
    }
}
