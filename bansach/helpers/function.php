<?php

use Illuminate\Support\Facades\Storage;

if (!function_exists('upload_file')) {
    function upload_file($folder, $file) {
        return 'storage/' . Storage::put($folder, $file);
    }
}
// function uploadImage($nameFolder, $file){
//     $fileName=time().'_'.$file->getClientOriginalName();
//     return $file->storeAs($nameFolder,$fileName,'public');
// }
// function upload(){
//           $image = $request->file('img');
//         $filename = time() . '_' . $image->getClientOriginalName();
//         $image->move(public_path('img'), $filename);
//         $cover_image = "/img/{$filename}";
//         $model->img=$cover_image;
// }