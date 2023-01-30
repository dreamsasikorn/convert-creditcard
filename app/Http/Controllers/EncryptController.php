<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EncryptController extends Controller
{
    public function uploadFile(Request $request){
        // dd($request);
        $EncryptFile = $_FILES['EncryptFile'];
        dd($EncryptFile);
        $arrayData = [];
        $data = [];
    }
}