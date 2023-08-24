<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use Illuminate\Support\Facades\storage;

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
        $data=Student::all();
        return view('admin.students.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $title='thêm ';
        return view('admin.students.create',compact('title'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStudentRequest $request)
    {
        // 
        $model = new Student();
        $model->fill($request->all());
        if($request->hasFile('image')&&$request->file('image')->isValid()){
            $model['image']=uploadFile('image',$request->file('image'));
        }
        $model->save();
        return redirect()->route('admin.student.index');
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
        return view("admin.students.edit",compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStudentRequest $request, string $id)
    {
        //
        $model =  Student::findOrFail($id);
        $model->fill($request->all());
        if($request->hasFile('image')){
            $model->image=upload_file('image',$request->file('image'));
        }
        $model->save();
        return redirect()->route('admin.student.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $model=Student::find($id);
        $file = Storage::delete('/public/'.$model->image);
        $model->delete();
        return redirect()->route('admin.student.index');
    }
}
