<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rule;

class ProductController extends Controller
{
    //
    public function index()
    {
        //
        $data = Product::query()->with(['category'])->paginate();

        // OBJECT . DOT . __FUNCTION__ ~ tags.index
        return view(OBJECT_PRODUCTS . DOT . __FUNCTION__, compact('data'));


    }
    public function create()
    {
        //
        return view(OBJECT_PRODUCTS . DOT . __FUNCTION__);
        
    }

    public function store(Request $request)
    {
        //
        $model = new Product();

        $model->fill($request->all());
       // if ($request->hasFile('img')) {
          //   $model->img = uploadImage('thuy', $request->file('img'));
        //     $model->img = upload_file(OBJECT, $request->file('img'));
        //     $image = $request->file('img');
        // $filename = time() . '_' . $image->getClientOriginalName();
        // $image->move(public_path('img'), $filename);
        // $cover_image = "/img/{$filename}";
        // $model->img=$cover_image;
            
      //  }
      if ($request->hasFile('img')) {
        $model->img = upload_file(OBJECT, $request->file('img'));
    }
       

        $model->save();

        return redirect()->route('product.index');
        //(new Category())->fittable
       // Category::query()->create();
       // dd($request->all());
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
    public function edit($id)
    {
        //
        $data=Product::find($id);
        return view(OBJECT_PRODUCTS . DOT . __FUNCTION__, compact('data'));
        

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $model = Product::query()->findOrFail($id);

        $model->fill($request->all());
        if ($request->hasFile('img')) {
            $model->img = upload_file(OBJECT, $request->file('img'));
        }

        $model->save();

        return redirect()->route('product.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        try {
            $product->delete();

            return back()
                ->with('status', Response::HTTP_OK)
                ->with('msg', 'Thao tác thành công!');
        }  catch (\Exception $exception) {
            Log::error('Exception', [$exception]);

            return back()
                ->with('status', Response::HTTP_BAD_REQUEST)
                ->with('msg', 'Thao tác thất bại!');
        }
    }
}

