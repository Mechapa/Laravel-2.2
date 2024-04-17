<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Group;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view('student.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($group)
    {
        return view('student.create', ['group' => $group]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $group)
    {
        $request->validate([
            'group_id' => 'required',
            'surname' => 'required',
            'name' => 'required',
        ]);

        Student::create($request->all());
        return redirect()->route('group.show', $group);
    }

    /**
     * Display the specified resource.
     */
    public function show($groupId, $studentId)
    {
        $group = Group::find($groupId);
        $students = $group->students;
        $student = $students->find($studentId);
        $group_title = $student->group->title;
        return view('student.show', compact('student', 'group', 'group_title'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
}
