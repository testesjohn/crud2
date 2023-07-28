<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers = Teacher::all();

        return view('home', ['teachers' => $teachers]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|unique:teachers,email',
            'materia' => 'required|string',
            'escola' => 'required',

        ]);

        Teacher::create($data);

        return redirect() -> route('home') -> with('msg', 'Professor criado com sucesso!');
    }


    public function edit(Teacher $teacher)
    {
        return view('edit', ['teacher' => $teacher]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Teacher $teacher)
    {
        $teacher->update($request->all());

        return redirect() -> route('home') -> with('msg', 'Professor editado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Teacher $teacher)
    {
        $teacher->delete();

        return redirect() -> route('home') -> with('msg', 'Professor deletado com sucesso!');
    }
}
