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
function delete_image_from_storage($imageName)
{
    if ($imageName) {
        // Đường dẫn đến thư mục lưu trữ tệp ảnh
        $imagePath = storage_path('app/public/images/') . $imageName;

        // Xóa tệp ảnh nếu tồn tại
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
    }
}