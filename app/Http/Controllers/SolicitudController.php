<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SolicitudController extends Controller
{
    public function Solicitud(){
        return view('Solicitud');
    }
    public function recepcionsolicitud(Request $request){
        return view('recepcionsolicitud');
    }

}
