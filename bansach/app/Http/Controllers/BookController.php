<?php

namespace App\Http\Controllers;
use  App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rule;

class BookController extends Controller
{
    // const obj='admin/Books';
    // // tên thư mục
    // const dot='.';
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data= Book::query()->orderByDesc('id')->get();
        
        return view(OBJECT_BOOKS . DOT . __FUNCTION__, compact('data'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view(OBJECT_BOOKS . DOT . __FUNCTION__);
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookRequest $request)
    {
        //
        $model = new Book();

        $model->fill($request->all());
        if ($request->hasFile('img')) {
            $model->img = upload_file(OBJECT, $request->file('img'));
        //         $image = $request->file('img');
        // $filename = time() . '_' . $image->getClientOriginalName();
        // $image->move(public_path('img'), $filename);
        // $cover_image = "/img/{$filename}";
        // $model->img=$cover_image;
        }

        $model->save();

        return redirect()->route('Book.index');
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
        $data=Book::find($id);
        return view(OBJECT_BOOKS . DOT . __FUNCTION__, compact('data'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookRequest $request, string $id)
    {
        //
        $model = Book::query()->findOrFail($id);

        $model->fill($request->all());

        $model->save();

        return redirect()->route('Book.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $category=Book::find($id);

        // $model=Category::query()->findOrFail($id);
        //findorFail vaididate dữ liệu
     //   Category::destroy($id);
       // $model->delete();
       $category->delete();
        return back();
    }
}
