<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me (){
        return Response()->json(
            [
                "NIS" =>"3103118074",
                "Name" =>"Ifan Bagastian Fauzi",
                "Gender" =>"Laki-laki",
                "Phone" =>"081234567890",
                "Class" =>"XII RPL 3"
            ]
        );
    }
}
