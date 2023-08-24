<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
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
        return response()->json($data);
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
        //
        $model = new Teacher();
        $model -> fill($request->all());
        if($request->hasFile('image')){
            $model->image=upload_file('img',$request->file('image'));
        }
        $model ->save();
        // dd($model);
        return response()->json($model);
       
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $data=Teacher::find($id);
        return response()->json($data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $model =  Teacher::findOrFail($id);
        $model -> fill($request->all());
        if($request->hasFile('image')){
            $model->image=upload_file('img',$request->file('image'));
        }
        $model ->save();
        return response()->json($model);
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $model= Teacher::find($id);
        // delete_image_from_storage($model->image);
        $model -> delete();

        return response()->json($model);
        
    }
}
