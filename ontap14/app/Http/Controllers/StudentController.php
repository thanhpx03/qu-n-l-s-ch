<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreStudentRequest;
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
        $data=Student::query()->orderByDesc('id')->get();
            return view('admin.students.index',compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStudentRequest $request)
    {
        //
        $model= new Student();
        $model->fill($request->all());
        if($request->hasFile('image')){
            $model->image=upload_file('image',$request->file('image'));
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
        return view('admin.students.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $model= Student::findOrFail($id);
        $model->fill($request->post());
        $anhcu=$model->image;
        
        if($request->hasFile('image')){
            $model->image=upload_file('image',$request->file('image'));
            delete_file($anhcu);
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
        $model= Student::findOrFail($id);
        if($model->image){
            delete_file($model->image);
        }
    
        $model->forceDelete();
        return redirect()->route('admin.student.index');
        
    }
}
