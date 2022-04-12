<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageUploadController extends Controller
{
    public function image_upload(){
        return view('ImageUpload.image-upload');
    }
}
