<?php
function uploadFile($folder,$file){
    $fileName = time() . '_' . $file->getClientOriginalName();
    return $file->storeAs($folder,$fileName,'public');
}