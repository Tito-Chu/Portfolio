<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadController extends Controller
{
    //
    public function getDownload()
    {
        //PDF FILE is stored under publi/download/jasonchu.pdf
        $file = public_path(). "/public/Download/jasonchu.pdf";

        $headers = [
            'Content-Type' => 'application/pdf',
         ];

        return Response::download($file, 'jasonchu.pdf', $headers);
    }
}
