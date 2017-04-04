<?php
/**
 * User: VAZH
 * Date: 04/04/2017
 * Time: 11.20
 */

namespace App\Http\Controllers;

use App\User as Anggota;
use Illuminate\Support\Facades\Response;

class TestController
{
    public function test()
    {
        $anggota = Anggota::take(10)->get();
        echo $anggota;
    }
}
