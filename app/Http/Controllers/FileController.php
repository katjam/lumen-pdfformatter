<?php
namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Log;
use mikehaertl\pdftk\Pdf;

class FileController extends BaseController
{
    public function store(Request $request)
    {
        $pdf = new Pdf($request->pdffile);
        $pdf->cat(1,5)
            ->saveAs('filled.pdf');
    }
}
