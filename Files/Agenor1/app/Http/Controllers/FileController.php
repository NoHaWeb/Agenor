<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class FileController extends Controller
{
    public function fileindex()
    {
        // Adott mappa elérési útja
        $directory = storage_path('app\public\files'); // Például a public/uploads mappa

        // Fájlok beolvasása
        $files = File::files($directory);

        // Nézet visszaadása a fájlokkal
        return view('files', ['files' => $files]);
    }
}
