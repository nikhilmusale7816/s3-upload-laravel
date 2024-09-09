<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class S3UploadController extends Controller
{
    public function upload(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:jpg,png,pdf|max:10240', // 10MB Max
        ]);

        $file = $request->file('file');
        $path = $file->store('uploads', 's3');

        $url = Storage::disk('s3')->url($path);

        return redirect()->back()->with('success', "File uploaded successfully. <a href='{$url}'>View file</a>");
    }
}
