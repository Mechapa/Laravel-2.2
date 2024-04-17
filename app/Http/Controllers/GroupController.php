<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $groups = Group::all();
        return view('group.index', compact('groups'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('group.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Валидация переданных данных
        $request->validate([
            'title' => 'required',
            'start_from' => 'required',
            'is_active' => 'required',
        ]);
        // $existingGroup = Group::where('title', $request->title)->first(); 
        // if($existingGroup) {
        //     // Группа с таким названием уже существует
        //     return redirect()->back()->with('error', 'Группа с таким названием уже существует');
        // }
        Group::create($request->all());
        return redirect()->route('group.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Group $group, $id)
    {
        $group = Group::find($id);
        $students = $group->students()->get();
        return view('group.show', compact('group', 'students'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $group = Group::find($id);
        return view('group.edit', compact('group'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'start_from' => 'required',
            'is_active' => 'required',
        ]);
        // $existingGroup = Group::where('title', $request->title)->first(); 
        // if($existingGroup && $exis) {
        //     // Группа с таким названием уже существует
        //     return redirect()->back()->with('error', 'Группа с таким названием уже существует');
        // }
        $group = Group::find($id);
        $group->update($request->all());
        return redirect()->route('group.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $group = Group::find($id);
        $group->delete();
        return redirect()->route('group.index');
    }
}

