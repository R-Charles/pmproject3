<?php

namespace App\Http\Controllers;

use App\Models\Record;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RecordController extends Controller
{
    //Show all records
    public function index() {
        return view('records.index', [
            'records' => Record::latest()->filter
            (request(['title', 'search']))->SimplePaginate(6)
        ]);
    }

    //Show single record
    public function show(Record $record) {
        return view('records.show', [
            'record' => $record
        ]);
    }

    // Show Create Form
    public function create() {
        return view('records.create');
    }

    // Store record Data
    public function store(Request $request) {
        $formFields = $request->validate([
            'title' => 'required',
            'status' => 'required',
            'code' => ['required', Rule::unique('records', 'code')],
            'description' => 'required'
        ]);

        Record::create($formFields);

        return redirect('/')->with('message', 'Record created successfully!');
    }

    // Show Edit Form
    public function edit(Record $record) {
        return view('records.edit', ['record' => $record]);
    }

    // Update record Data
    public function update(Request $request, Record $record) {
        $formFields = $request->validate([
            'title' => 'required',
            'status' => 'required',
            'code' => ['required'],
            'description' => 'required'
        ]);

        $record->update($formFields);

        return back()->with('message', 'Record Updated successfully!');
    }

    // Delete Record 
    public function destroy(Record $record) {
        $record->delete();
        return redirect('/')->with('message', ' Listing deleted successfully');
    }
}
