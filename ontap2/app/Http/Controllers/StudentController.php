<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentResquest;

use Illuminate\Http\Request;
use App\Models\Student;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = Student::query()->orderByDesc("id")->get();
        return view('students.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStudentRequest $request)
    {
        //
        // $tableName=(new Student())->getTable();
        $model=new Student();
        $model->fill($request->all());
        if($request->hasFile('image')){
            $model->image=upload_file('image',$request->file('image'));
        }

        $model->save();
        // dd($model);
        return redirect()->route('student.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $data=Student::find($id);
        return view('students.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStudentResquest $request, string $id)
    {
        //
        $model= Student::query()->findorFail($id);
        $model->fill($request->all());
        if($request->hasFile('image')){
            $model-> image=upload_file('image',$request->file('image'));
        }
        $model->save();
        return redirect()->route('student.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
        
        $student->delete();
        return redirect()->route('student.index');
    }
}
