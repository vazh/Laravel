<?php
/**
 * Created by PhpStorm.
 * User: VAZH
 * Date: 22/03/2017
 * Time: 14.25
 */

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Response;

class FileServerController
{
    public function serve($fileId)
    {
        $path = storage_path('app/public/' . $fileId);
        return Response::make(file_get_contents($path), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="' . $fileId . '"'
        ]);
    }
}