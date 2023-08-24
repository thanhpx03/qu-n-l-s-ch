<?php

namespace App\Http\Controllers;
use App\Models\tag;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rule;
class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   // const obj='tag';
    // tên thư mục
  //  const dot='.';
    public function index()
    {
        //
        $data = tag::query()->latest()->paginate();

        // OBJECT . DOT . __FUNCTION__ ~ tags.index
        return view(OBJECT . DOT . __FUNCTION__, compact('data'));


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view(OBJECT . DOT . __FUNCTION__);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $tableName=(new tag())->getTable();
        $this->validate(
            $request,[
                'name'=>['required','max:20',Rule::unique($tableName)],
                'img'=>['nullable','max:256'],
            ]
        );
        try {
            $model = new tag();

            $model->fill($request->all());

            if ($request->hasFile('img')) {
                //$model->img = uploadImage('thuy', $request->file('img'));
               
                $model->img = upload_file('thanh1', $request->file('img'));
            }

            

            $model->save();
           //    dd($model);

            return redirect()->route('tags.index')
                ->with('status', Response::HTTP_OK)
                ->with('msg', 'Thao tác thành công!');
        } catch (\Exception $exception) {
            Log::error('Exception', [$exception]);

            return back()
                ->with('status', Response::HTTP_BAD_REQUEST)
                ->with('msg', 'Thao tác thất bại!');
        }
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
        $data=tag::find($id);
        return view(OBJECT . DOT . __FUNCTION__, compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $tableName=(new tag())->getTable();
        $this->validate(
            $request,[
                'name'=>['required','max:20',Rule::unique($tableName)],
                'img'=>['nullable','max:256'],
            ]
            );

       try{
        $model=tag::query()->findOrFail($id);
        $model->fill($request->all());
        if ($request->hasFile('img')) {
            //$model->img = uploadImage('thuy', $request->file('img'));
           
            $model->img = upload_file(OBJECT, $request->file('img'));
        }


        $model->save();
        return  redirect()->route('tags.index')
        ->with('status',Response::HTTP_OK)
        ->with('msg','thao tac thanh cong');
       } catch(\Exception $exception){
           Log::error('Exception',[$exception]);

           return back()
           ->with('status',Response::HTTP_BAD_REQUEST)
           ->with('msg','thao tac that bai');

       }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tag $tag)
    {
        //
        try {
            $tag->delete();

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
