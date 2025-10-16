<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UploadController extends Controller
{
   public function uploadImage(Request $request)
{
    $fileName = time() . '_' . $request->file('file')->getClientOriginalName();
    $request->file('file')->storeAs('public/images', $fileName);

    // ✅ Trả về URL đầy đủ để hiển thị ảnh
    $url = asset('storage/public/images/' . $fileName);

    return response()->json([
        'success' => true,
        'path' => $url
    ]);
}

// up nhieu anh
    public function uploadImages(Request $request)
{
    if (!$request->hasFile('files')) {
        return response()->json([
            'success' => false,
            'message' => 'No files uploaded.'
        ]);
    }

    $urls = [];
    foreach ($request->file('files') as $file) {
        $fileName = time() . '-' . $file->getClientOriginalName();
        $file->storeAs('public/images', $fileName);
        $urls[] = asset('storage/public/images/' . $fileName);
    }

    return response()->json([
        'success' => true,
        'paths' => $urls
    ]);
}
}

