<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreTeacherRequest;
use App\Http\Requests\UpdateTeacherRequest;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;
use App\Models\Teacher;
class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data=Teacher::query()->orderByDesc('id')->get();
        return view('admin.students.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $title='thêm';
        return view('admin.students.create',compact('title'));


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTeacherRequest $request)
    {
        //
        $model = new Teacher();
        $model -> fill($request->all());
        if($request->hasFile('image')){
            $model->image=upload_file('thanh',$request->file('image'));
        }
        $model ->save();
        // dd($model);
        return redirect()->route('admin.teacher.index');
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
        $data=Teacher::find($id);
        $title='edit';
        return view('admin.students.edit',compact('title','data'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTeacherRequest $request, string $id)
    {
        //
        $model =  Teacher::findOrFail($id);
        $model -> fill($request->all());
        if($request->hasFile('image')){
            $model->image=upload_file('thanh',$request->file('image'));
        }
        $model ->save();
        return redirect()->route('admin.teacher.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $model= Teacher::find($id);
        
       // $imageRomve = Storage::delete('app/public/images'.$model->image);
        // delete_image_from_storage($model->image);
        // dd($imageRomve);
        if ($model->image) {
            $imagePath = 'public/images/' . $model->image;
            if (Storage::exists($imagePath)) {
                Storage::delete($imagePath);
            }
        }
        $model -> delete();

        return redirect()->route('admin.teacher.index');
        
    }
}
