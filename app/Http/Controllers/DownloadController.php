<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DownloadController extends Controller
{
    /**
     * Downloads the file with the given filename.
     *
     * @param $filename
     * @return \Symfony\Component\HttpFoundation\StreamedResponse
     */
    public function index($filename)
    {
        return Storage::download($filename);
    }
}
