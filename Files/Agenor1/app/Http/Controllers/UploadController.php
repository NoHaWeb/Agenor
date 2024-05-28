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

        $file = $request->file('file');
        $originalName = $file->getClientOriginalName();

        $path = $file->storeAs('public/files', $originalName);

        return redirect('dashboard')->with('status', 'File has been uploaded successfully in Agenor!');
    }
}