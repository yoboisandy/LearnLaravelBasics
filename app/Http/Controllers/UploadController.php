<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function uploadpage()
    {
        return view('upload');
    }

    public function upload(Request $request)
    {
        // p($request->all());
        $filename = time() . "-newapp." . $request->file('file')->getClientOriginalExtension();
        echo $request->file('file')->storeAs('public/uploads', $filename);
    }
}
