<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
      
        return view('client.trangchu.product');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
        ]);
        
        Category::create($request->post());

        return redirect()->route('Category.index')->with('success','thêm thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $data)
    {
        //
        return view('layout',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data=Category::find($id);
        //
        return view('Category.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id,Request $request)
    {
        //
        $data=Category::find($id);

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
        ]);
        
        $data->fill($request->post())->save();

        return redirect()->route('Category.index')->with('success','Company Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $data=Category::find($id);
        $data->delete();
        return redirect()->route('Category.index')->with('success','Company has been deleted successfully');
    }
}
