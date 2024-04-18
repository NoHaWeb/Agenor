<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class UploadController extends Controller
{
     public function index()
    {
        return view('file-upload');
    }

    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
         'file' => 'required|mimes:doc,docx,pdf,txt,json,xlsx,xls|max:2048',
        ]);

        $path = $request->file('file')->store('public/files');

        //write the logic here to store file in database

        return redirect('dashboard')->with('status', 'File Has been uploaded successfully in Laravel');

    }
}